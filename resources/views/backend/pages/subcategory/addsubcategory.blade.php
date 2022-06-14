@extends('backend.mastertemplate.template')

@section('contant') 
   

        <div class="row row-sm mg-t-20">
          <div class="col-lg-12">
            <div class="card bd-0 shadow-base">
             
                <div class="content">
                  <!-- product insert form -->
                  <form action="{{Route('addsubcategory.add')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row p-5">
                      <div class="col-md-6">
                          <div class="form-group">
                             <label for="categoryId">Seclect Category </label>
                             <select name="categoryId" id="categoryId" class="form-control">
                                 <option value="">--select category---</option>
                                 @foreach ($categories as $category)
                                 <option value="{{$category->id}}">{{$category->catagoryName}}</option> 
                                 @endforeach
                             </select>
                          </div>
                            <div class="form-group">
                                <label for="subcategoryName">Category Name</label>
                                <input type="text" class="form-control" id="subcategoryName" name="subcategoryName" placeholder="Enter your Sub-category Name"/>
                                @error('subcategoryName') 
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        <div class="form-group">
                          <label for="subcategoryDrescreption">Sub-Category Drescreption</label>
                          <textarea name="subcategoryDrescreption" id="subcategoryDrescreption" cols="30" rows="5" class="form-control" placeholder="Enter subcategory Drescreption"></textarea>
                          @error('subcategoryDrescreption') 
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="image">Sub-Category Image</label>
                          <input type="file" class="form-control" id="image" name="image"/>
                           @error('image') 
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="categoryStatus">Status</label>
                          <select name="subcategoryStatus" id="" class="form-control">
                            <option value="1">---Statu---</option>
                            <option value="1">Active</option>
                            <option value="0">In Active</option> 
                          </select>
                          @error('categoryStatus') 
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