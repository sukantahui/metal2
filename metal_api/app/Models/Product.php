<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $hidden = [
        "inforce","created_at","updated_at"
    ];
    private $hsn_code;
    private $gst_rate;
    private $sale_unit_id;
    private $purchase_unit_id;
    private $product_category_id;
    private $description;
    private $product_name;
    private $opening_balance;

    public function category()
    {
        return $this->belongsTo('App\Models\ProductCategory','product_category_id');
    }
    public function purchase_unit()
    {
        return $this->belongsTo('App\Models\Unit','purchase_unit_id');
    }
    public function sale_unit()
    {
        return $this->belongsTo('App\Models\Unit','sale_unit_id');
    }
    public function purchase_details()
    {
        return $this->hasMany('App\Models\PurchaseDetail','product_id');
    }
    public function sale_details()
    {
        return $this->hasMany('App\Models\SaleDetail','product_id');
    }

    // use 'get' and 'Attribute' in the naming of function to get the calculated attribute as 'is_deletable'
    public function getIsDeletableAttribute(){
        $purchase_count = $this->purchase_details()->count();
        $sale_count = $this->sale_details()->count();
        if($purchase_count+$sale_count > 0){
            return false;
        }else{
            return true;
        }
    }
    public static function boot() {
        parent::boot();
        static::creating(function($item) {
            Log::info('Creating event call: '.$item);
        });
    }
}
