<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCategoryResource;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends ApiController
{

    public function isDeletable($id){
        $totalIntegrityCount = 0;
        $productCategory=ProductCategory::find($id);
        $productCount=$productCategory->products->count();
        $totalIntegrityCount = $totalIntegrityCount + $productCount;

        if($totalIntegrityCount == 0){
            return true;
        }else{
            return  false;
        }
    }

    public function index()
    {
        //
    }

    public function getProductCategories(){
        $productCategories = ProductCategory::get();
        // return response()->json(['success'=>1,'data'=>ProductCategoryResource::collection($productCategories) ], 200,[],JSON_NUMERIC_CHECK);
        return $this->successResponse( ProductCategoryResource::collection($productCategories) ,"All Product categories !");
    }

    public function usedProductCategory()
    {

        $productCategories = ProductCategory::has('products')->get();
        // return response()->json(['success'=>1,'data'=>$productCategories], 200,[],JSON_NUMERIC_CHECK);
        return $this->successResponse( ProductCategoryResource::collection($productCategories) ,"Used Product categories !");


    }

    public function notUsedProductCategory(Request $request)
    {
        $productCategories =  ProductCategory::doesnthave('products')->get();
        // return response()->json(['success'=>1,'data'=>$productCategories], 200,[],JSON_NUMERIC_CHECK);
        return $this->successResponse( ProductCategoryResource::collection($productCategories) ,"Not Used Product categories !");

    }

    public function show(ProductCategory $productCategory)
    {
        //
    }

    public function edit(ProductCategory $productCategory)
    {
        //
    }

    public function update(Request $request, ProductCategory $productCategory)
    {
        //
    }


    public function destroy(ProductCategory $productCategory)
    {
        //
    }
}
