@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add New User</h1>
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
            <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data" id="add-user">
              @csrf
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputFirstName">First Name</label>
                      <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter First Name" name="first_name">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputMiddleName">Middle Name</label>
                      <input type="text" class="form-control" id="exampleInputMiddleName" placeholder="Enter Middle Name" name="middle_name">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputLastName">Last Name</label>
                      <input type="text" class="form-control" id="exampleInputLastName" placeholder="Enter Last Name" name="last_name">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail" placeholder="Enter email" name="email">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputRole">Role</label>
                      <select class="select2" multiple="multiple" data-placeholder="Select a Role" style="width: 100%;" name="roles[]">
                        @foreach($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword">Confirm Password</label>
                      <input type="password" class="form-control" id="exampleInputConfirmPassword" placeholder="Enter Confirm Password" name="password_confirmation">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputFirstPhone">First Phone</label>
                      <input type="text" class="form-control" id="exampleInputFirstPhone" placeholder="Enter First Phone" name="first_phone">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputSecondPhone">Second Phone</label>
                      <input type="text" class="form-control" id="exampleInputSecondPhone" placeholder="Enter Second Phone" name="second_phone">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputFile">Image</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Upload</span>
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
  $(document).ready(() => {
    $('#add-user').validate({
        rules: {
          first_name: "required",
          last_name: "required",
          email: {
            required: true,
            email: true
          },
          password : {
            required: true,
            minlength : 4
          },
          password_confirmation : {
            required: true,
            minlength : 4,
            equalTo : "#password"
          }
        }
    });
  });
</script>
@endpush