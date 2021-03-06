<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $hidden = [
        "created_at","updated_at"
    ];
    protected $appends = ['product_count'];
    /*Suppose you have a variable in database as tinyint or int but you want use it in laravel as
    boolean then cast the field as below to get it as boolean
    */
    protected $casts = [
        'inforce' => 'boolean',
    ];

    public function products()
    {
        return $this->hasMany('App\Models\Product','product_category_id');
    }
    //this way we can create attribute in model
    public function getProductCountAttribute()
    {
        return $this->products()->count();
    }
    public function getIsDeletableAttribute()
    {
        $product_count = $this->products()->count();

        if($product_count > 0){
            return false;
        }else{
            return true;
        }
    }
}
