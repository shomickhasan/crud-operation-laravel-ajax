@extends('backend.mastertemplate.template')

@section('contant') 
   

        <div class="row row-sm mg-t-20">
          <div class="col-lg-12">
            <div class="card bd-0 shadow-base">
             
                <div class="content">
                  <!-- product insert form -->
                  <form action="{{Route('updateProduct',$products->id)}}" method="post">
                    @csrf
                    <div class="row p-5">
                      <div class="col-md-6">
                        <div class="form-group">
                          <lavel id="pname">Product Name</lavel>
                          <input type="text" class="form-control" id="pname" name="productName" placeholder="Enter your product name" value="{{$products->productName}}"/>
                        </div>

                        <div class="form-group">
                          <lavel id="pname">Product Drescreption</lavel>
                          <textarea name="productDrescreption" id="" cols="30" rows="5" class="form-control">{{$products->productDrescreption}}</textarea>
                        </div>
                        <div class="form-group">
                          <lavel id="pname">Product Catag</lavel>
                          <select name="productCatagories" id="" class="form-control">
                            <option value="1">---Catagories---</option>

                            <option value="Gents" @if($products->productCatagories=='Gents') selected @endif >Gents</option>

                            <option value="Ladies"@if($products->productCatagories=='Ladies') selected @endif >Ladies</option>

                            <option value="Kids" @if($products->productCatagories=='Kids') selected @endif >Kids</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <lavel id="pname">Product-Side</lavel>
                          <select name="productSize" id="" class="form-control">
                            <option value="1">---Product Size---</option>

                            <option value="XXL"@if($products->productSize=='XXL') selected  @endif>XXL</option>

                            <option value="XL" @if($products->productSize=='XL') selected @endif>XL</option>

                            <option value="M" @if($products->productSize=='M') selected @endif>M</option>

                            <option value="L" @if($products->productSize=='L') selected @endif>L</option>

                            <option value="S" @if($products->productSize=='S') selected @endif>S</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <lavel id="parchesPrice">Product Parches Price</lavel>
                          <input type="text" class="form-control" id="parchesPrice" name="productParchesPrice" placeholder="Enter your product Parches Price"/ value="{{$products->productParchesPrice}}">
                        </div>
                        <div class="form-group">
                          <lavel id="productSellPrice">Product sell Price</lavel>
                          <input type="text" class="form-control" id="sellPrice" name="productSellPrice" placeholder="Enter your product Parches Price" value="{{$products->productSellPrice}}" />
                        </div>
                        <div class="form-group">
                          <lavel id="productQuantity">Product Quantity</lavel>
                          <input type="text" class="form-control" id="productQuantity" name="ProductQuantity" placeholder="Enter your product Parches Price" value="{{$products->ProductQuantity}}"/>
                        </div>
                        <div class="form-group">
                          <lavel id="pname">Status</lavel>
                          <select name="productStatus" id="" class="form-control">

                            <option value="1" >---Statu---</option>

                            <option value="1" @if($products->status==1) selected @endif>Active</option>

                            <option value="0" @if($products->status==0) selected @endif>In Active</option>
                            
                          </select>
                        </div>
                        <div class="form-group">
                          
                          <input type="submit" class="form-control btn btn-info text-uppercase" id="productQuantity" name="productQuantity" value="Update"/>
                        </div>
                      </div>
                      
                    </div>
                  </form>
                </div>
                
             
            </div><!-- card -->

          </div><!-- col-4 -->
        </div><!-- row -->



@endsection