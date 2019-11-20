@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add New Offer</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.offer.index')}}">Back</a></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Offer Details</h3>
        </div>
        <form role="form" autocomplete="off">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputTitle">Title</label>
                  <input type="text" class="form-control" id="exampleInputTitle" placeholder="Enter Title">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputService">Service</label>
                  <select class="form-control" id="exampleInputService">
                    <option>Select Service</option>
                    <option>Delivery</option>
                    <option>Take awy</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Offer Date and time range:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservationtime">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Branch</label>
                  <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                    <option>Branch1</option>
                    <option>Branch2</option>
                    <option>Branch3</option>
                    <option>Branch4</option>
                    <option>Branch5</option>
                    <option>Branch6</option>
                    <option>Branch7</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="offerDescription">Description</label>
                  <textarea class="form-control"></textarea>
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
              <div class="col-md-8">
                <div class="form-group">
                  <label for="exampleInputOfferType">Offer Type</label>
                  <select class="form-control" id="exampleInputOfferType" onchange="selectOfferType(this)">
                    <option>Select Offer Type</option>
                    <option value="buy-get">Buy / Get</option>
                    <option value="discount">Discount</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="card card-primary" id="buy-get">
              <div class="card-header">
                <h3 class="card-title">Buy</h3>
              </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputQuauntity">Quauntity</label>
                        <input type="number" class="form-control" id="exampleInputQuauntity" placeholder="Enter Quauntity">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputCategory">Category</label>
                        <select class="form-control" id="exampleInputCategory">
                          <option>Select Category</option>
                          <option>Category1</option>
                          <option>Category2</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Items</label>
                        <select class="select2" multiple="multiple" data-placeholder="Select a Item" style="width: 100%;">
                          <option>Item1</option>
                          <option>Item2</option>
                          <option>Item3</option>
                          <option>Item4</option>
                          <option>Item5</option>
                          <option>Item6</option>
                          <option>Item7</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-header">
                  <h3 class="card-title">Get</h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputCategory2">Category</label>
                        <select class="form-control" id="exampleInputCategory2">
                          <option>Select Category</option>
                          <option>Category1</option>
                          <option>Category2</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Items</label>
                        <select class="select2" multiple="multiple" data-placeholder="Select a Item" style="width: 100%;">
                          <option>Item1</option>
                          <option>Item2</option>
                          <option>Item3</option>
                          <option>Item4</option>
                          <option>Item5</option>
                          <option>Item6</option>
                          <option>Item7</option>
                        </select>
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="exampleInputOfferPrice">Offer Price</label>
                      <select class="form-control" id="exampleInputOfferPrice">
                        <option>Select Offer Price</option>
                        <option>Free</option>
                        <option>20%</option>
                        <option>30%</option>
                        <option>40%</option>
                        <option>50%</option>
                        <option>60%</option>
                        <option>70%</option>
                        <option>80%</option>
                        <option>90%</option>
                      </select>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card card-primary" id="discount">
              <div class="card-header">
                <h3 class="card-title">Discount</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputQuauntity">Quauntity</label>
                      <input type="number" class="form-control" id="exampleInputQuauntity" placeholder="Enter Quauntity">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputCategory">Category</label>
                      <select class="form-control" id="exampleInputCategory">
                        <option>Select Category</option>
                        <option>Category1</option>
                        <option>Category2</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Items</label>
                      <select class="select2" multiple="multiple" data-placeholder="Select a Item" style="width: 100%;">
                        <option>Item1</option>
                        <option>Item2</option>
                        <option>Item3</option>
                        <option>Item4</option>
                        <option>Item5</option>
                        <option>Item6</option>
                        <option>Item7</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputDiscountType">Discount Type</label>
                      <select class="form-control" id="exampleInputDiscountType">
                        <option>Select Discount Type</option>
                        <option value="percentage">percentage</option>
                        <option value="percentage">Amount</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputValue">Value</label>
                      <input type="text" class="form-control">
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
$( document ).ready(function() {
  document.getElementById('buy-get').style.display = "none";
  document.getElementById('discount').style.display = "none";
});
function selectOfferType(select) {
  if (select.value=='buy-get') {
      document.getElementById('buy-get').style.display = "block";
      document.getElementById('discount').style.display = "none";
  } else if (select.value=='discount') {
      document.getElementById('buy-get').style.display = "none";
      document.getElementById('discount').style.display = "block";
  } else {
      document.getElementById('buy-get').style.display = "none";
      document.getElementById('discount').style.display = "none";
  }
}
</script>
@endpush