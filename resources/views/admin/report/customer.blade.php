@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Customers</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="card-body">
        <div class="row">
          <form action="#" method="get" style="width: 100%;display:inline;">
            <div class="col-md-4">
              <div class="form-group">
                  <label>Select Customer</label>
                  <select class="form-control">
                    <option>Select Customer</option>
                    <option>All</option>
                    <option>Amer</option>
                  </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                  <label>Select City</label>
                  <select class="form-control">
                    <option>Select City</option>
                    <option>city1</option>
                    <option>city2</option>
                  </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                  <label>Select Area</label>
                  <select class="form-control">
                    <option>Select Area</option>
                    <option>area1</option>
                    <option>area2</option>
                  </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <label>Select DateTime Range</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservationtime">
                  </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                  <label class="form-label" style="width: 100%;"></label>
                  <div class="input-group pull-right">
                      <button type="submit" class="btn btn-primary" style="margin-top: 6px; height: 35px;width: 80%;">Go</button>
                  </div>
              </div>
            </div>
          </form>
      </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="card-body">
        <table class="table table-bordered table-striped dataTable">
          <thead>
            <tr>
              <th>Customer ID</th>
              <th>Customer Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>City</th>
              <th>Arae</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td><a href="#">test</a></td>
              <td>01152152142</td>
              <td>test@gmail.com</td>
              <td>Giza</td>
              <td>El Mohandseen</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>
@endsection