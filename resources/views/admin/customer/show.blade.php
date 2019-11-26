@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Show Customer</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.customer.index')}}">Back</a></li>
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
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputFirstName">First Name</label>
                      <input type="text" class="form-control" id="exampleInputFirstName" value="{{$customer->first_name}}" disabled>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputMiddleName">Middle Name</label>
                      <input type="text" class="form-control" id="exampleInputMiddleName" value="{{$customer->middle_name}}" disabled>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputLastName">Last Name</label>
                      <input type="text" class="form-control" id="exampleInputLastName" value="{{$customer->last_name}}" disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail"  value="{{$customer->email}}" disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputFirstPhone">First Phone</label>
                      <input type="text" class="form-control" id="exampleInputFirstPhone" value="{{$customer->first_phone}}" disabled>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputSecondPhone">Second Phone</label>
                      <input type="text" class="form-control" id="exampleInputSecondPhone" value="{{$customer->second_phone}}" disabled>
                    </div>
                  </div>
                </div>
              </div>
              @if(!$addresses->isEmpty())
                <h3>Addresses</h3>
                @foreach($addresses as $address)
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputFirstName">City</label>
                        <input type="text" class="form-control" id="exampleInputFirstName" value="{{$address->city_id}}" disabled>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputMiddleName">Area</label>
                        <input type="text" class="form-control" id="exampleInputMiddleName" value="{{$address->area_id}}" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputFirstName">Street</label>
                        <input type="text" class="form-control" id="exampleInputFirstName" value="{{$address->street}}" disabled>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputMiddleName">Building Number</label>
                        <input type="text" class="form-control" id="exampleInputMiddleName" value="{{$address->building_number}}" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputFirstName">Floor Number</label>
                        <input type="text" class="form-control" id="exampleInputFirstName" value="{{$address->floor_number}}" disabled>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputMiddleName">Special Marque</label>
                        <input type="text" class="form-control" id="exampleInputMiddleName" value="{{$address->special_marque}}" disabled>
                      </div>
                    </div>
                  </div>
                @endforeach
              @endif
          </div>
        </div>
  </section>
</div>
@endsection