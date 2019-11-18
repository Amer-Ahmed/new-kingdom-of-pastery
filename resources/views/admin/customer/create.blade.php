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
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputRole1">Role</label>
                      <select class="form-control">
                        <option>role 1</option>
                        <option>role 2</option>
                        <option>role 3</option>
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
                                      <label for="exampleInputEmail1">City</label>
                                      <select class="form-control">
                                        <option>city 1</option>
                                        <option>city 2</option>
                                        <option>city 3</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Area</label>
                                      <select class="form-control">
                                        <option>area 1</option>
                                        <option>area 2</option>
                                        <option>area 3</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="exampleInputFullAddress">Full Address</label>
                                      <input type="text" class="form-control" id="exampleInputFullAddress" placeholder="Enter Full Address">
                                    </div>
                                  </div>
                                </div>
                                <a href="#" id="add-new-address" class="btn btn-block btn-primary">
                                  <i class="fas fa-plus mr-2"></i> Add Another Address
                                </a>
                              </div>
                              <div id="newAddress">
                                <div class="container">
                                  <h3 class="card-title">Address #1</h3>
                                  <div class="card-body">
                                    <div class="row container-fluid">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">City</label>
                                          <select class="form-control">
                                            <option>city 1</option>
                                            <option>city 2</option>
                                            <option>city 3</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Area</label>
                                          <select class="form-control">
                                            <option>area 1</option>
                                            <option>area 2</option>
                                            <option>area 3</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">City</label>
                                          <select class="form-control">
                                            <option>city 1</option>
                                            <option>city 2</option>
                                            <option>city 3</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Area</label>
                                          <select class="form-control">
                                            <option>area 1</option>
                                            <option>area 2</option>
                                            <option>area 3</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">City</label>
                                          <select class="form-control">
                                            <option>city 1</option>
                                            <option>city 2</option>
                                            <option>city 3</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Area</label>
                                          <select class="form-control">
                                            <option>area 1</option>
                                            <option>area 2</option>
                                            <option>area 3</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">City</label>
                                          <select class="form-control">
                                            <option>city 1</option>
                                            <option>city 2</option>
                                            <option>city 3</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Area</label>
                                          <select class="form-control">
                                            <option>area 1</option>
                                            <option>area 2</option>
                                            <option>area 3</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Description</label>
                                          <textarea cols=""></textarea>
                                        </div>
                                      </div>
                                    </div>
                                    <a href="#" id="delete-address" class="btn btn-block btn-danger">
                                      <i class="fas fa-trash-alt mr-2"></i> Delete Address
                                    </a>
                                  </div>
                                </div>
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
  $(document).ready(function() {
      var max_fields = 10;

      var x = 1;
      $(".add-new-address").click(function(e) {
          e.preventDefault();
          if (x < max_fields) {
              x++;
              $(".newAddress").append('<div><input type="text" name="mytext[]"/><a href="#" class="delete">Delete</a></div>');
          } else {
              alert('You Reached the limits')
          }
      });

      $(".newAddress").on("click", ".delete", function(e) {
          e.preventDefault();
          $(this).parent('div').remove();
          x--;
      })
  });
</script>
@endpush