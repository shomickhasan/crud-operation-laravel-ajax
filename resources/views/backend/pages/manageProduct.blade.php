@extends('backend.mastertemplate.template')

@section('contant') 
   

        <div class="row row-sm mg-t-20">
          <div class="col-lg-12">
            <div class="card bd-0 shadow-base">
              <div class="d-md-flex justify-content-between pd-25">
                <div class="content">
                  <div class="row">
                    <div class="col-md-12 px-1">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> #SL</th>
                            <th> Name</th>
                            <th> Drescreption</th>
                            <th> Catagories</th>
                            <th> Size</th>
                            <th> Parches Price</th>
                            <th>sell Price</th>
                            <th> Quantity</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php $sl=1; @endphp
                          @foreach( $products as $data)
                            <tr>
                              <td>{{$sl++}}</td>
                              <td>{{$data->productName}}</td>
                              <td>{{$data->productDrescreption}}</td>
                              <td>{{$data->productCatagories}}</td>
                              <td>{{$data->productSize}}</td>
                              <td>{{$data->productParchesPrice}}</td>
                              <td>{{$data->productSellPrice}}</td>
                              <td>{{$data->ProductQuantity}}</td>
                              <td>
                                @if($data->productStatus==1)
                                <span class="badge badge-info">In Stock</span>
                                @else
                                 <span class="badge badge-danger">Out of Stock</span>
                                @endif
                              </td>
                              <td>
                                  <a href="{{ Route('editProduct',$data->id); }}" class=" btn btn-sm btn-info"><i class="fas fa-edit"></i></a> 

                                  <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$data->id}}">
                                     <i class="fas fa-trash-alt"></i>
                                  </button>
                              </td>
                             
                            </tr>
                            <!-- Modal for delete Product -->
                        <div class="modal fade" id="delete{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Please confirm</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Are you Want to Delete this Product:<span class="badge badge-warning">{{$data->productName}}?</span>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-info" data-dismiss="modal">No</button>
                                <a href="{{Route ('delete',$data->id)}}" class="btn btn-sm btn-danger">Ok</a>
                              </div>
                            </div>
                          </div>
                        </div>
                            

                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                
              </div><!-- pd-x-25 -->
            </div><!-- card -->

          </div><!-- col-4 -->
        </div><!-- row -->



@endsection