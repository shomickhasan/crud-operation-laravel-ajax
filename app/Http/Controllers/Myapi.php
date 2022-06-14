<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backend\Product;
use Illuminate\Support\Facades\Validator;

class Myapi extends Controller
{
    public function apicreateasion($id=null){
        // $apidata = new Product();
        // $apidata= $apidata::all();
        // return $apidata;
        if($id==""){
            $products = Product::get();
            return response()->json([
                'data'=> $products,
                'status'=>'200',
                'message'=>'data find successfully',
            ]);
         }
         else{
            $products = Product::find($id);
            return response()->json([
                'data'=> $products,
                'status'=>'200',
                'message'=>'data find successfully',
            ]);
         }
            
       
        
    }

    
    public function store(Request $request){
      if($request->token=='123456789'){
        // $roules=[
        //     'productName'=>'required',
        //     'productDrescreption'=>'required',
        //     'productCatagories'=>'required',
        //     'productSize'=>'required',
        //     'productParchesPrice'=>'required',
        //     'productSellPrice'=>'required',
        //     'productStatus'=>'required',
            
        // ];
        // $message=[
        //     'productName.required'=>'product name is required',
        //     'productDrescreption.required'=>'product name is required',
        //     'productCatagories.required'=>'product Drescreption is required',
        //     'productSize.required'=>'product Size is required',
        //     'productParchesPrice.required'=>'product Parches Price is required',
        //     'productSellPrice.required'=>'product Sell price is required',
        //     'productStatus.required'=>'product status is required',
        // ];
       /* $validator = Validator::make($request->all() ,[
            'productName'=>'required',
            'productDrescreption'=>'required',
            'productCatagories'=>'required',
            'productSize'=>'required',
           'productParchesPrice'=>'required',
            'productSellPrice'=>'required',
           'productStatus'=>'required',

    ]);

    if($validator->fails()){
        return response()->json($validator.errors());
    }*/

        $data= new Product();
        $data->productName= $request->productName;
        $data->productDrescreption= $request->productDrescreption;
        $data->productCatagories= $request->productCatagories;
        $data->productSize= $request->productSize;
        $data->productParchesPrice= $request->productParchesPrice;
        $data->productSellPrice= $request->productSellPrice;
        $data->ProductQuantity= $request->ProductQuantity;
        $data->productStatus= $request->productStatus;
        $data->save();
            if($data){
                return response()->json([
                    'status'=>'200',
                    'message'=>'data save successfully'
                ]);
            }
            else{
                return response()->json([
                    'status'=>'400',
                    'message'=>'page not found',
                ]);
            }
      }//end token condition
      else{
          return response()->json([
              'status'=>'404',
              'message'=>'token not found',
          ]);
      }

    }

    //for product update api


    public function update(Request $request, $id)
    {
        $product= Product::find($id);
        $product->productName = $request->productName;
        $product->productDrescreption = $request->productDrescreption;
        $product->productCatagories = $request->productCatagories;
        $product->productSize = $request->productSize;
        $product->productParchesPrice = $request->productParchesPrice;
        $product->productSellPrice = $request->productSellPrice;
        $product->ProductQuantity = $request->ProductQuantity;
        $product->productStatus = $request->productStatus;
        $product->update();

        
       
        
    }
}
