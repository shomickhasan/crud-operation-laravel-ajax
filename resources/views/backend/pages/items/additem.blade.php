@extends('backend.mastertemplate.template')

@section('contant') 
   

        <div class="row row-sm mg-t-20">
          <div class="col-lg-12">
            <div class="card bd-0 shadow-base">
             
                <div class="content">
                  <!-- product insert form -->
                  <form action="{{Route ('item.insert') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row p-5">
                      <div class="col-md-6">

                            <div class="form-group">
                                <label for="itemname">Item Name</label>
                                <input type="text" class="form-control" id="itemname" name="itemname" placeholder="Enter your Sub-category Name"/>
                                @error('itemname') 
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        <div class="form-group">
                          <label for="item_code">item Code</label>
                          <input name="item_code" id="item_code"  class="form-control" placeholder="Enter item code">
                          @error('item_code') 
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>


                        <div class="form-group">
                          <label for="price">Price</label>
                          <input name="price" id="price" class="form-control" placeholder="Enter item price">
                          @error('price') 
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="iteam_drescreption">iteam_drescreption</label>
                          <textarea name="iteam_drescreption" id="iteam_drescreption" cols="30" rows="5" class="form-control" placeholder="Enter subcategory Drescreption">{{old('iteam_drescreption')}}</textarea>
                          @error('iteam_drescreption') 
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="image">item image</label>
                          <input type="file" class="form-control" id="image" name="itemimage" value="{{old('itemimage')}}"/>
                           @error('itemimage') 
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="pic">Galary</label>
                          <input type="file" class="form-control" id="pic" name="galary_pic[]" value="{{old('picture')}}" multiple/>
                           @error('galary_pic') 
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