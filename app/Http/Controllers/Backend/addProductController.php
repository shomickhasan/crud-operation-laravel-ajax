<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Product;

class addProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderby('id','asc')->get();
        return view('backend.pages.manageProduct',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.pages.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'productName'=> 'required',
           'productDrescreption'=> 'required| min:10|max:50',
           'productCatagories'=> 'required',
           'productSize'=> 'required',
           'productParchesPrice'=> 'required|numeric',
           'productSellPrice'=> 'required|numeric',
           'ProductQuantity'=> 'numeric',
           'productStatus'=> 'required',

        ]);
        $obj = new Product();
         //objectveriable->dbfiledName= $request(parametter)->form name property
        $obj->productName         =$request->productName;
        $obj->productDrescreption =$request->productDrescreption;
        $obj->productCatagories   =$request->productCatagories;
        $obj->productSize         =$request->productSize;
        $obj->productParchesPrice =$request->productParchesPrice;
        $obj->productSellPrice    =$request->productSellPrice;
        $obj->ProductQuantity     =$request->ProductQuantity;
        $obj->productStatus       =$request->productStatus;
        $obj->save();

        return redirect()->route('dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //show for update
        $products = Product::find($id);
        return view('backend.pages.editProduct',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

        return redirect()->route('viewProduct');
       
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete product
        $product= Product::find($id);
        $product->delete();
        return redirect()->route('viewProduct');
    }
}
