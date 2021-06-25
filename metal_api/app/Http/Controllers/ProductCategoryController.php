<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCategoryResource;
use App\Models\ProductCategory;
// use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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

    public function createProductCategory(Request $request)
    {
        $rules = array(
            'categoryName' => ['required', 'unique:product_categories,category_name']
        );

        $message = array(
            'categoryName.required' => 'Product Category name is required',
            'categoryName.unique' => 'Product Category name must be unique',
        );

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()){
            return $this->errorResponse($validator->messages(),406);
        }
        try{
            $productCategory = new ProductCategory();
            $productCategory-> category_name = $request->input('categoryName');
            $productCategory->save();
            return $this->successResponse( new ProductCategoryResource($productCategory) ,"Added new Product Categories !");
        }catch(Illuminate\Database\QueryException $e){

            return response()->json(['success'=>0,'data'=>null, 'error'=>$e], 200,[],JSON_NUMERIC_CHECK);
        }


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

    public function getProductCategoryById($id)
    {
        $productCategory = ProductCategory::findOrFail($id);
        return response()->json(['success'=>1,'data'=>new ProductCategoryResource($productCategory)], 200,[],JSON_NUMERIC_CHECK);

    }

    public function getProductsByCategoryId($id)
    {
        $productCategory = ProductCategory::findOrFail($id);
        $productCategory->setAttribute('productInfo',$productCategory->products);
        return response()->json(['success'=>1,'data'=>$productCategory], 200,[],JSON_NUMERIC_CHECK);



    }

    public function updateProductCategory(Request $request)
    {
        $productCategoryId = $request->input('producCategorytId');
        $rules = array(
            'producCategorytId' => ['required', 'exists:product_categories,id'],
            'categoryName' => ['required', Rule::unique('product_categories', 'category_name')->ignore($productCategoryId)],
        );

        $message = array(
            'producCategorytId.required' => 'Product Category Id is required',
            'producCategorytId.exists' => 'Product Category Id does not exists',
            'categoryName.required' => 'Product Category name is required',
            'categoryName.unique' => 'Product Category name must be unique',
        );

        $validator = Validator::make($request->all(), $rules, $message);
        if($validator->fails()){
            return $this->errorResponse($validator->messages(),406);
        }


        $productCategory = ProductCategory::findOrFail($productCategoryId);
        $productCategory->category_name = $request->input('categoryName');
        $productCategory->update();

        return $this->successResponse( new ProductCategoryResource($productCategory) ,"Product Category Updated !");

    }


    public function deleteProductCategory($id)
    {
        $productCategory = ProductCategory::findOrFail($id);
        if(!$productCategory->is_deletable){
            return $this->errorResponse('this category is not deletable',406);
        }
        if(!empty($productCategory)){
            $result = $productCategory->delete();
        }
        else{
            $result = false;
        }
        return $this->successResponse($id,'category deleted !!!');
    }
}
