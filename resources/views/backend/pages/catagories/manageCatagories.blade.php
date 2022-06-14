@extends('backend.mastertemplate.template')

@section('contant') 
   

        <div class="row row-sm mg-t-20 ">
          <div class="col-lg-12">
            <div class="card bd-0 shadow-base">
             
                <div class="content p-3">
                  <!-- catagory table-->
                  <div class="row">
                    <div class="col-md-12">
                      <div class="message"></div>
                        <div class="table-top-contant d-flex justify-content-between mb-3 ">
                            {{-- leftside of heading --}}
                            <div class="left "><h2>category</h2></div>
                            {{-- right side of heading --}}
                            <div class="rigtt ">
                              <button class="btn btn-info" data-toggle="modal" data-target="#addCatagori">Add Catagories</button>
                             </div>
                        </div>
                        {{-- catagory table start here --}}
                        <div class="catagory-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Catagory Name</th>
                                        <th>Drescreption</th>
                                        <th>Tag</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    {{-- <tr>
                                        <td>Boys</td>
                                        <td>Boyes fashion</td>
                                        <td>Fashion</td>
                                        <td>Activs</td>
                                        <td>action</td>
                                    </tr> --}}
                                </tbody>
                            </table>
                            <h1 class="show"></h1>
                           
                            
                        </div>  
                        
                    </div>
                  </div>
                 
                  
                </div>

                
                
             
            </div><!-- card -->

          </div><!-- col-4 -->
        </div><!-- row -->

  </div>
  <!--  catagori add Modal -->
<div class="modal fade" id="addCatagori" tabindex="-1" role="dialog" aria-labelledby="addCatagori" aria-hidden="true">
    
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
              <label for="catagoryName">Category Name</label>
              <input type="text" id="catagoryName" class="form-control" name="catagoryName" placeholder="please Enter Category Name">
              <span class="text-danger categoryNameerror"></span>
          </div>
          <div class="form-group">
            <label for="categoryDrescreption">Category Drescreptions</label>
            <textarea name="categoryDrescreption" id="categoryDrescreption" class="form-control" cols="25" rows="4" placeholder="Enter Category Drescreption"></textarea>
            <span class="text-danger categoryDredcreptionerror"></span>  
        </div>
          <div class="form-group">
            <label for="catagoryTag">Category Name</label>
            <input type="text" id="catagoryTag" class="form-control" name="catagoryTag" placeholder="please Enter Category Tag">
            <span class="text-danger categoryTagerror"></span> 
        </div>
          <div class="form-group">
            <select name="categoryStatus" id="categoryStatus" class="form-control">
                <option value="1">--select Catagory status--</option>
                <option value="1">Active</option>
                <option value="0">In Active</option>
            </select>
         </div>
         <button type="button" id="CategorySave" Name="CategorySave" class="form-control btn btn-info">Save </button>
         
        </div>
        
      </div>
    </div>
  </div>


  <!--update category Modal -->
<div class="modal fade" id="updateCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="errormessage"></div>
        <div class="form-group">
          <label for="catagoryName">Category Name</label>
          <input type="text" id="updatecatagoryName" class="form-control" name="UpdatecatagoryName" placeholder="please Enter Category Name">
          <span class="text-danger updatecategoryNameerror"></span>
      </div>
      <div class="form-group">
        <label for="categoryDrescreption">Category Drescreptions</label>
        <textarea name="updatecategoryDrescreption" id="updatecategoryDrescreption" class="form-control" cols="25" rows="4" placeholder="Enter Category Drescreption"></textarea>
        <span class="text-danger updatecategoryDredcreptionerror"></span>  
    </div>
      <div class="form-group">
        <label for="catagoryTag">Category Name</label>
        <input type="text" id="updatecatagoryTag" class="form-control" name="catagoryTag" placeholder="please Enter Category Tag">
        <span class="text-danger updatecategoryTagerror"></span> 
    </div>
      <div class="form-group">
        <select name="updatecatagoryStatus" id="showstatus" class="form-control">
            <option value="1">Active</option>
            <option value="2">In Active</option>
        </select>
     </div>
     <input type="hidden" id="id">
     
     <button type="button" id="Categoryupdate"  class="form-control btn btn-info">Update</button>
     

      </div>
     
    </div>
  </div>
</div>

 <!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you want to it delete
        <input type="hidden" id="deleteId">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-danger" id="confirmDelete">delete</button>
      </div>
    </div>
  </div>
</div>




@endsection