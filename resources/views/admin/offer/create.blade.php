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
        <form action="{{ route('admin.offer.store') }}" method="POST" enctype="multipart/form-data" id="add-offer">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputTitle">Title</label>
                  <input type="text" class="form-control" id="exampleInputTitle" placeholder="Enter Title" name="title">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputService">Service</label>
                  <select class="form-control" id="exampleInputService" name="service_type">
                    <option value="">Select Service</option>
                    <option value="delivery">Delivery</option>
                    <option value="take-way">Take awy</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Date From</label>
                  <input type="datetime-local" class="form-control" name="date_from">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Date To</label>
                  <input type="datetime-local" class="form-control" name="date_to">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Branch</label>
                  <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" name="branches[]">
                    <option value="Branch1">Branch1</option>
                    <option value="Branch2">Branch2</option>
                    <option value="Branch3">Branch3</option>
                    <option value="Branch4">Branch4</option>
                    <option value="Branch5">Branch5</option>
                    <option value="Branch6">Branch6</option>
                    <option value="Branch7">Branch7</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="offerDescription">Description</label>
                  <textarea class="form-control" name="description"></textarea>
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
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="exampleInputOfferType">Offer Type</label>
                  <select class="form-control" id="exampleInputOfferType" onchange="selectOfferType(this)" name="offer_type">
                    <option value="">Select Offer Type</option>
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
                        <input type="number" class="form-control" id="exampleInputQuauntity" placeholder="Enter Quauntity" name="buy_quantity">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputCategory">Category</label>
                        <select class="form-control" id="exampleInputCategory" name="buy_category_id">
                          <option value="">Select Category</option>
                          <option value="1">Category1</option>
                          <option value="2">Category2</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Items</label>
                        <select class="select2" multiple="multiple" data-placeholder="Select a Item" style="width: 100%;" name="buy_items[]">
                          <option value="Item1">Item1</option>
                          <option value="Item2">Item2</option>
                          <option value="Item3">Item3</option>
                          <option value="Item4">Item4</option>
                          <option value="Item5">Item5</option>
                          <option value="Item6">Item6</option>
                          <option value="Item7">Item7</option>
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
                        <label for="exampleInputQuauntity">Quauntity</label>
                        <input type="number" class="form-control" id="exampleInputQuauntity" placeholder="Enter Quauntity" name="get_quantity">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputCategory2">Category</label>
                        <select class="form-control" id="exampleInputCategory2" name="get_category_id">
                          <option value="">Select Category</option>
                          <option value="1">Category1</option>
                          <option value="2">Category2</option>
                        </select>
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Items</label>
                      <select class="select2" multiple="multiple" data-placeholder="Select a Item" style="width: 100%;" name="get_items[]">
                        <option value="Item1">Item1</option>
                        <option value="Item2">Item2</option>
                        <option value="Item3">Item3</option>
                        <option value="Item4">Item4</option>
                        <option value="Item5">Item5</option>
                        <option value="Item6">Item6</option>
                        <option value="Item7">Item7</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="exampleInputOfferPrice">Offer Price</label>
                      <select class="form-control" id="exampleInputOfferPrice" name="offer_price">
                        <option value="">Select Offer Price</option>
                        <option value="0">Free</option>
                        <option value="20">20%</option>
                        <option value="30">30%</option>
                        <option value="40">40%</option>
                        <option value="50">50%</option>
                        <option value="60">60%</option>
                        <option value="70">70%</option>
                        <option value="80">80%</option>
                        <option value="90">90%</option>
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
                      <input type="number" class="form-control" id="exampleInputQuauntity" placeholder="Enter Quauntity" name="discount_quantity">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputCategory">Category</label>
                      <select class="form-control" id="exampleInputCategory" name="category_id">
                        <option value="">Select Category</option>
                        <option value="1">Category1</option>
                        <option value="2">Category2</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Items</label>
                      <select class="select2" multiple="multiple" data-placeholder="Select a Item" style="width: 100%;" name="items[]">
                        <option value="Item1">Item1</option>
                        <option value="Item2">Item2</option>
                        <option value="Item3">Item3</option>
                        <option value="Item4">Item4</option>
                        <option value="Item5">Item5</option>
                        <option value="Item6">Item6</option>
                        <option value="Item7">Item7</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputDiscountType">Discount Type</label>
                      <select class="form-control" id="exampleInputDiscountType" name="discount_type">
                        <option>Select Discount Type</option>
                        <option value="1">percentage</option>
                        <option value="2">Amount</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputValue">Value</label>
                      <input type="number" class="form-control" name="discount_value">
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