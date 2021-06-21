<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use http\Exception;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\productResource;
use Illuminate\Validation\Rule;

class ProductController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getAllProducts(){
        $products = Product::select('products.id', 'products.product_name', 'products.description', 'product_categories.category_name',
                    'products.product_category_id', 'products.purchase_unit_id', 'products.gst_rate', 'products.hsn_code' ,'opening_balance'
                    ,DB::raw('(select unit_name from units where units.id=products.purchase_unit_id) as purchase_unit_name'),'products.sale_unit_id'
                    ,DB::raw('(select unit_name from units where units.id=products.sale_unit_id) as sale_unit_name'))
                    ->join('product_categories','product_categories.id','products.product_category_id')
                    ->get();
        return response()->json(['success'=>1,'data'=>$products], 200,[],JSON_NUMERIC_CHECK);
    }

    public function getProductById($id){
        $product = Product::find($id);
        return response()->json(['success'=>1,'data'=>new ProductResource($product)], 200,[],JSON_NUMERIC_CHECK);

    }

    public function saveProduct(Request $request){
        $rules = array(
            'productName' => ['required','unique:products,product_name'],
            'description' => ['required','max:25'],
            'productCategoryId' => ['required','exists:product_categories,id'],
            'purchaseUnitId' => ['required','exists:units,id'],
            'saleUnitId' => ['required','exists:units,id'],

            'gstRate' => ['required','integer','between:1,18'],
//              for greater than value
//            'gst_rate' => 'required|integer|gt:1',
            'hsnCode' => ['required'],
            'openingBalance' => ['required'],
        );
        $messages = array(
            'purchaseUnitId.exists' => 'Unit does not exists !',
            'purchaseUnitId.required'=> 'Please provide purchase unit !'
        );
        $validator = Validator::make($request->all(),$rules,$messages);

        if ($validator->fails()) {

            return $this->errorResponse($validator->messages(),406);

        }
        /*
             {
                "product_name": "teste234",
                "description": "asdfasfdas dfgh d dfdf sd sdf sdf sdfg sdf sdf sd df sdfg  sdfgsdgsdggh",
                "product_category_id": 2,
                "purchase_unit_id": 1,
                "sale_unit_id": 1,
                "hsn_code": "asdf",
                "gst_rate": 12

             }
         */

        /*
         * This way we can check the product is updated or created
         * */
//        $product = Product::updateOrCreate ([
//            'product_name'=>$request->input('product_name')
//            ,'description'=>$request->input('description')
//            ,'product_category_id'=>$request->input('product_category_id')
//            ,'purchase_unit_id'=>$request->input('purchase_unit_id')
//            ,'sale_unit_id'=>$request->input('sale_unit_id')
//            ,'gst_rate'=>$request->input('gst_rate')
//            ,'hsn_code'=>$request->input('hsn_code')
//        ]);
//        return response()->json(['success'=>1,'data'=>$product,'stat'=>$product->wasRecentlyCreated], 200,[],JSON_NUMERIC_CHECK);



        try{
            $product = new Product();
            $product->product_name = $request->input('productName');
            $product->description = $request->input('description');
            $product->product_category_id = $request->input('productCategoryId');
            $product->purchase_unit_id = $request->input('purchaseUnitId');
            $product->sale_unit_id = $request->input('saleUnitId');
            $product->gst_rate = $request->input('gstRate');
            $product->hsn_code = $request->input('hsnCode');
            $product->opening_balance = $request->input('openingBalance');

            $product->save();
//            $product->setAttribute('category_name', $product->category->category_name);
//            $product->setAttribute('purchase_unit_name', $product->purchase_unit->unit_name);
//            $product->setAttribute('sale_unit_name', $product->sale_unit->unit_name);

            return $this->successResponse(new ProductResource($product) ,"Product Saved !");


        }catch (Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                // houston, we have a duplicate entry problem
                return response()->json(['success'=>0,'data'=>null, 'error'=>$e], 200,[],JSON_NUMERIC_CHECK);
            }else{
                return response()->json(['success'=>0,'data'=>null, 'error'=>$e], 200,[],JSON_NUMERIC_CHECK);
            }
        }
    }


    public function updateProduct(Request $request){
        $productId = $request->input('productId');
        $rules = array(
            'productId'=> ['required','exists:products,id'],
            'productName' => ['required',Rule::unique('products','product_name')->ignore($productId)],
            'description' => ['required','max:25'],
            'productCategoryId' => ['required','exists:product_categories,id'],
            'purchaseUnitId' => ['required','exists:units,id'],
            'saleUnitId' => ['required','exists:units,id'],

            'gstRate' => ['required','integer','between:1,18'],
//              for greater than value
//            'gst_rate' => 'required|integer|gt:1',
            'hsnCode' => ['required'],
            'openingBalance' => ['required'],
        );
        $messages = array(
            'purchaseUnitId.exists' => 'Unit does not exists !',
            'purchaseUnitId.required'=> 'Please provide purchase unit !'
        );
        $validator = Validator::make($request->all(),$rules,$messages);
       if($validator->fails()){
           return response()->json(['success'=>0,'data'=>null,'error'=>$validator->messages()], 200,[],JSON_NUMERIC_CHECK);
       }

        try{
            $product=Product::find($productId);
            $product->product_name = $request->input('productName');
            $product->description = $request->input('description');
            $product->product_category_id = $request->input('productCategoryId');
            $product->purchase_unit_id = $request->input('purchaseUnitId');
            $product->sale_unit_id = $request->input('saleUnitId');
            $product->gst_rate = $request->input('gstRate');
            $product->hsn_code = $request->input('hsnCode');
            $product->opening_balance = $request->input('openingBalance');

            $product->update();
            $product->setAttribute('category_name', $product->category->category_name);
            $product->setAttribute('purchase_unit_name', $product->purchase_unit->unit_name);
            $product->setAttribute('sale_unit_name', $product->sale_unit->unit_name);

            return response()->json(['success'=>1,'data'=>$product, 'error'=>null], 200,[],JSON_NUMERIC_CHECK);
        }catch(Illuminate\Database\QueryException $e){
            return response()->json(['success'=>0,'data'=>null, 'error'=>$e], 200,[],JSON_NUMERIC_CHECK);
        }

    }

    public function deleteProduct($id){
        $product = Product::find($id);
        if(!empty($product)){
            $result = $product->delete();
        }else{
            $result = false;
        }
        return response()->json(['success'=>$result,'id'=>$id], 200);
    }





}
