@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add New Customer</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Back</a></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Personal information</h3>
            </div>
            <form role="form" autocomplete="off">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputFirstName">First Name</label>
                      <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter First Name">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputMiddleName">Middle Name</label>
                      <input type="text" class="form-control" id="exampleInputMiddleName" placeholder="Enter Middle Name">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputLastName">Last Name</label>
                      <input type="text" class="form-control" id="exampleInputLastName" placeholder="Enter Last Name">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail" placeholder="Enter email">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputRole">Role</label>
                      <select class="form-control" id="exampleInputRole">
                        <option>role 1</option>
                        <option>role 2</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword" placeholder="Enter Password">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword">Confirm Password</label>
                      <input type="password" class="form-control" id="exampleInputConfirmPassword" placeholder="Enter Confirm Password">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputFirstPhone">First Phone</label>
                      <input type="text" class="form-control" id="exampleInputFirstPhone" placeholder="Enter First Phone">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputSecondPhone">Second Phone</label>
                      <input type="text" class="form-control" id="exampleInputSecondPhone" placeholder="Enter Second Phone">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputFile">Image</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Upload</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Address Details</h3>
                      </div>
                      <div class="card-body">
                        <div id="accordion">
                          <div class="card card-primary">
                            <div class="card-header">
                              <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed" aria-expanded="false">
                                  Add Address Details
                                </a>
                              </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse in collapse" style="">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="exampleInputCity">City</label>
                                      <select class="form-control" id="exampleInputCity">
                                        <option>city 1</option>
                                        <option>city 2</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="exampleInputArea">Area</label>
                                      <select class="form-control" id="exampleInputArea">
                                        <option>area 1</option>
                                        <option>area 2</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="exampleInputStreet">Street</label>
                                      <input type="text" class="form-control" id="exampleInputStreet" placeholder="Enter Street">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="exampleInputBuildingNumber">Building Number</label>
                                      <input type="text" class="form-control" id="exampleInputBuildingNumber" placeholder="Enter Building Number">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="exampleInputFloorNumber">Floor Number</label>
                                      <input type="text" class="form-control" id="exampleInputFloorNumber" placeholder="Enter Floor Number">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="exampleInputSpecialMarque">Special Marque</label>
                                      <input type="text" class="form-control" id="exampleInputSpecialMarque" placeholder="Enter Special Marque">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <a style="float: right;" href="javascript:void(0);" class="btn btn-primary block" id="add_new_address" ><i class="fas fa-plus mr-2"></i>Add Another Address</a>
                                  </div>
                                </div>
                              </div>
                              <div id="newAddress">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Submit</button>
              </div>
            </form>
          </div>
        </div>
  </section>
</div>
@endsection

@push('js')
<script>
  var i = 1 ;
  $( document ).ready(function() {
    var rmoveID = 0; 
    $("#add_new_address").click(function (event) {
      var append =  '<div class="container" id="block_'+rmoveID+'">';
          append += '<h3 class="card-title">Address #'+i+'</h3>';
          append += '<div class="card-body">';
          append += '<div class="row container-fluid">';
          append += '<div class="col-md-6">';
          append += '<div class="form-group">';
          append += '<label>City'+i+'</label>';
          append += '<select class="form-control">';
          append += '<option>city 1</option>';
          append += '<option>city 2</option>';
          append += '</select>';
          append += '</div>';
          append += '</div>';
          append += '<div class="col-md-6">';
          append += '<div class="form-group">';
          append += '<label>Area'+i+'</label>';
          append += '<select class="form-control">';
          append += '<option>area 1</option>';
          append += '<option>area 2</option>';
          append +=  '</select>';
          append += '</div>';
          append += '</div>';
          append += '</div>';
          append += '<div class="row">';
          append += '<div class="col-md-6">';
          append += '<div class="form-group">';
          append +=  '<label>Street'+i+'</label>';
          append += '<input type="text" class="form-control" placeholder="Enter Street">';
          append += '</div>';
          append += '</div>';
          append += '<div class="col-md-6">';
          append += '<div class="form-group">';
          append += '<label>Building Number'+i+'</label>';
          append +=  '<input type="text" class="form-control" placeholder="Enter Building Number">';
          append += '</div>';
          append += '</div>';
          append += '</div>';

          append += '<div class="row">';
          append += '<div class="col-md-6">';
          append += '<div class="form-group">';
          append +=  '<label>Floor Number'+i+'</label>';
          append += '<input type="text" class="form-control" placeholder="Enter Floor Number">';
          append += '</div>';
          append += '</div>';
          append += '<div class="col-md-6">';
          append += '<div class="form-group">';
          append += '<label>Special Marque'+i+'</label>';
          append +=  '<input type="text" class="form-control" placeholder="Enter Special Marque">';
          append += '</div>';
          append += '</div>';
          append += '</div>';

          append +=  '<div class="row" id="removeBtn_'+rmoveID+'">';
          append += '<div class="col-md-6">';
          append += '<a style="float: right;" href="javascript:void(0);" class="btn btn-danger block" onclick="removeBlock('+rmoveID+')"><i class="fas fa-trash-alt mr-2"></i>Delete Address</a>';
          append += '</div>';
          append +=  '</div>';

          rmoveID++;
      $("#newAddress").last().append(append);
      i++; 
    });        
  });
  function removeBlock(id){
      $("#block_"+id).remove();
      i--;
  }
  function removeBtn(id){
      id = id - 2 ;
      $("#removeBtn_"+id).remove();
  }
</script>
@endpush