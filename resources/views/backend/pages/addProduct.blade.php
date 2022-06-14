@extends('backend.mastertemplate.template')

@section('contant') 
   

        <div class="row row-sm mg-t-20">
          <div class="col-lg-12">
            <div class="card bd-0 shadow-base">
             
                <div class="content">
                  <!-- product insert form -->
                  <form action="{{Route('addProduct')}}" method="post">
                    @csrf
                    <div class="row p-5">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label id="pname">Product Name</label>
                          <input type="text" class="form-control" id="pname" name="productName" placeholder="Enter your product name"/>
                          @error('productName') 
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label id="pname">Product Drescreption</label>
                          <textarea name="productDrescreption" id="" cols="30" rows="5" class="form-control"></textarea>
                          @error('productDrescreption') 
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label id="pname">Product Drescreption</label>
                          <select name="productCatagories" id="" class="form-control">
                            <option value="1">---Catagories---</option>
                            <option value="Gents">Gents</option>
                            <option value="Ladies">Ladies</option>
                            <option value="Kids">Kids</option>
                          </select>
                          @error('productCatagories') 
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label id="pname">Product-Side</label>
                          <select name="productSize" id="" class="form-control">
                            <option value="1">---Product Size---</option>
                            <option value="XXL">XXL</option>
                            <option value="XL">XL</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="S">S</option>
                          </select>
                          @error('productSize') 
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label id="parchesPrice">Product Parches Price</label>
                          <input type="text" class="form-control" id="parchesPrice" name="productParchesPrice" placeholder="Enter your product Parches Price"/>
                           @error('productParchesPrice') 
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label id="productSellPrice">Product sell Price</label>
                          <input type="text" class="form-control" id="sellPrice" name="productSellPrice" placeholder="Enter your product Parches Price"/>
                          @error('productSellPrice') 
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label id="productQuantity">Product Quantity</label>
                          <input type="text" class="form-control" id="productQuantity" name="ProductQuantity" placeholder="Enter your product Parches Price"/>

                        </div>
                        <div class="form-group">
                          <label id="pname">Status</label>
                          <select name="productStatus" id="" class="form-control">
                            <option value="1">---Statu---</option>
                            <option value="1">Active</option>
                            <option value="0">In Active</option>
                            
                          </select>
                          @error('productStatus') 
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          
                          <input type="submit" class="form-control btn btn-primary" id="productQuantity" name="productQuantity" value="Save"/>
                        </div>
                      </div>
                      
                    </div>
                  </form>
                </div>
                
             
            </div><!-- card -->

          </div><!-- col-4 -->
        </div><!-- row -->



@endsection