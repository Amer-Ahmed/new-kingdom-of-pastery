@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add New Category</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Back</a></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Category Details</h3>
            </div>
            <form role="form" autocomplete="off">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputArabicName">Arabic Name</label>
                      <input type="text" class="form-control" id="exampleInputArabicName" placeholder="Enter Arabic Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEnglishName">English Name</label>
                      <input type="text" class="form-control" id="exampleInputEnglishName" placeholder="Enter English Name">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputArabicDescription">Arabic Description</label>
                      <textarea class="form-control" id="exampleInputArabicDescription" placeholder="Enter Arabic Description"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEnglishDescription">English Description</label>
                      <textarea class="form-control" id="exampleInputEnglishDescription" placeholder="Enter English Description"></textarea>
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
                        <h3 class="card-title">Item Details</h3>
                      </div>
                      <div class="card-body">
                        <div id="accordion">
                          <div class="card card-primary">
                            <div class="card-header">
                              <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseItem" class="collapsed" aria-expanded="false">
                                  Add Item Details
                                </a>
                              </h4>
                            </div>
                            <div id="collapseItem" class="panel-collapse in collapse" style="">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="exampleInputItemArabicName">Item Arabic Name</label>
                                      <input type="text" class="form-control" id="exampleInputItemArabicName" placeholder="Enter Item Arabic Name">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="exampleInputItemEnglishName">Item English Name</label>
                                      <input type="text" class="form-control" id="exampleInputItem EnglishName" placeholder="Enter Item English Name">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="exampleInputItemArabicDescription">Item Arabic Description</label>
                                      <textarea class="form-control" id="exampleInputItemArabicDescription" placeholder="Enter Item Arabic Description"></textarea>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="exampleInputItemEnglishDescription">Item English Description</label>
                                      <textarea class="form-control" id="exampleInputItemEnglishDescription" placeholder="Enter Item English Description"></textarea>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="exampleInputItemPrice">Item Price</label>
                                      <input type="text" class="form-control" id="exampleInputItemPrice" placeholder="Enter Item Price">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="exampleInputItemCalories">Item Calories</label>
                                      <input type="text" class="form-control" id="exampleInputItemCalories" placeholder="Enter Item Calories">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Image</label>
                                      <div class="input-group">
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input">
                                          <label class="custom-file-label">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                          <span class="input-group-text">Upload</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <a style="float: right;" href="javascript:void(0);" class="btn btn-primary block" id="add_new_item" ><i class="fas fa-plus mr-2"></i>Add Another Item</a>
                                  </div>
                                </div>
                              </div>
                              <div id="newItem">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Extra Details</h3>
                      </div>
                      <div class="card-body">
                        <div id="accordion">
                          <div class="card card-primary">
                            <div class="card-header">
                              <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseExtra" class="collapsed" aria-expanded="false">
                                  Add Extra Details
                                </a>
                              </h4>
                            </div>
                            <div id="collapseExtra" class="panel-collapse in collapse" style="">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="exampleInputExtraArabicName">Extra Arabic Name</label>
                                      <input type="text" class="form-control" id="exampleInputExtraArabicName" placeholder="Enter Extra Arabic Name">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="exampleInputExtraEnglishName">Extra English Name</label>
                                      <input type="text" class="form-control" id="exampleInputExtra EnglishName" placeholder="Enter Extra English Name">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="exampleInputExtraArabicDescription">Extra Arabic Description</label>
                                      <textarea class="form-control" id="exampleInputExtraArabicDescription" placeholder="Enter Extra Arabic Description"></textarea>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="exampleInputExtraEnglishDescription">Extra English Description</label>
                                      <textarea class="form-control" id="exampleInputExtraEnglishDescription" placeholder="Enter Extra English Description"></textarea>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="exampleInputExtraPrice">Extra Price</label>
                                      <input type="text" class="form-control" id="exampleInputExtraPrice" placeholder="Enter Extra Price">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="exampleInputExtraCalories">Extra Calories</label>
                                      <input type="text" class="form-control" id="exampleInputExtraCalories" placeholder="Enter Extra Calories">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <a style="float: right;" href="javascript:void(0);" class="btn btn-primary block" id="add_new_extra" ><i class="fas fa-plus mr-2"></i>Add Another Extra</a>
                                  </div>
                                </div>
                              </div>
                              <div id="newExtra">
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
  var item = 1 ;
  var extra = 1 ;
  $( document ).ready(function() {
    var rmoveItemID = 0; 
    var rmoveExtraID = 0; 
    $("#add_new_item").click(function (event) {
      var appendItem =  '<div class="container" id="item_block_'+rmoveItemID+'">';
          appendItem += '<h3 class="card-title">Item #'+item+'</h3>';
          appendItem += '<div class="card-body">';
          appendItem += '<div class="row container-fluid">';
          appendItem += '<div class="col-md-6">';
          appendItem += '<div class="form-group">';
          appendItem += '<label>Item Arabic Name'+item+'</label>';
          appendItem += '<input type="text" class="form-control" placeholder="Enter Item Arabic Name">';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '<div class="col-md-6">';
          appendItem += '<div class="form-group">';
          appendItem += '<label>Item English Name'+item+'</label>';
          appendItem += '<input type="text" class="form-control" placeholder="Enter Item English Name">';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '<div class="row">';
          appendItem += '<div class="col-md-12">';
          appendItem +=  '<div class="form-group">';
          appendItem += '<label>Item Arabic Description'+item+'</label>';
          appendItem += '<textarea class="form-control" placeholder="Enter Item Arabic Description"></textarea>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '<div class="row">';
          appendItem += '<div class="col-md-12">';
          appendItem +=  '<div class="form-group">';
          appendItem += '<label>Item English Description'+item+'</label>';
          appendItem += '<textarea class="form-control" placeholder="Enter Item English Description"></textarea>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '<div class="row">';
          appendItem +=  '<div class="col-md-6">';
          appendItem += '<div class="form-group">';
          appendItem += '<label>Item Price'+item+'</label>';
          appendItem += '<input type="text" class="form-control" placeholder="Enter Item Price">';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '<div class="col-md-6">';
          appendItem +=  '<div class="form-group">';
          appendItem += '<label>Item Calories'+item+'</label>';
          appendItem += '<input type="text" class="form-control" placeholder="Enter Item Calories">';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '<div class="row">';
          appendItem += '<div class="col-md-12">';
          appendItem += '<div class="form-group">';
          appendItem += '<label>Image'+item+'</label>';
          appendItem += '<div class="input-group">';
          appendItem += '<div class="custom-file">';
          appendItem += '<input type="file" class="custom-file-input">';
          appendItem += '<label class="custom-file-label">Choose file'+item+'</label>';
          appendItem += '</div>';
          appendItem += '<div class="input-group-append">';
          appendItem += '<span class="input-group-text">Upload'+item+'</span>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '</div>';

          appendItem +=  '<div class="row" id="removeItemBtn_'+rmoveItemID+'">';
          appendItem += '<div class="col-md-6">';
          appendItem += '<a style="float: right;" href="javascript:void(0);" class="btn btn-danger block" onclick="removeItemBlock('+rmoveItemID+')"><i class="fas fa-trash-alt mr-2"></i>Delete Item</a>';
          appendItem += '</div>';
          appendItem +=  '</div>';
          appendItem += '<hr style="border-top: 1px solid #343a40;">';

          rmoveItemID++;
      $("#newItem").last().append(appendItem);
      item++; 
    });
    $("#add_new_extra").click(function (event) {
      var appendExtra =  '<div class="container" id="extra_block_'+rmoveExtraID+'">';
          appendExtra += '<h3 class="card-title">Extra #'+extra+'</h3>';
          appendExtra += '<div class="card-body">';
          appendExtra += '<div class="row container-fluid">';
          appendExtra += '<div class="col-md-6">';
          appendExtra += '<div class="form-group">';
          appendExtra += '<label>Extra Arabic Name'+extra+'</label>';
          appendExtra += '<input type="text" class="form-control" placeholder="Enter Extra Arabic Name">';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '<div class="col-md-6">';
          appendExtra += '<div class="form-group">';
          appendExtra += '<label>Extra English Name'+extra+'</label>';
          appendExtra += '<input type="text" class="form-control" placeholder="Enter Extra English Name">';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '<div class="row">';
          appendExtra += '<div class="col-md-12">';
          appendExtra +=  '<div class="form-group">';
          appendExtra += '<label>Extra Arabic Description'+extra+'</label>';
          appendExtra += '<textarea class="form-control" placeholder="Enter Extra Arabic Description"></textarea>';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '<div class="row">';
          appendExtra += '<div class="col-md-12">';
          appendExtra +=  '<div class="form-group">';
          appendExtra += '<label>Extra English Description'+extra+'</label>';
          appendExtra += '<textarea class="form-control" placeholder="Enter Extra English Description"></textarea>';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '<div class="row">';
          appendExtra +=  '<div class="col-md-6">';
          appendExtra += '<div class="form-group">';
          appendExtra += '<label>Extra Price'+extra+'</label>';
          appendExtra += '<input type="text" class="form-control" placeholder="Enter Extra Price">';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '<div class="col-md-6">';
          appendExtra +=  '<div class="form-group">';
          appendExtra += '<label>Extra Calories'+extra+'</label>';
          appendExtra += '<input type="text" class="form-control" placeholder="Enter Extra Calories">';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '</div>';

          appendExtra +=  '<div class="row" id="removeExtraBtn_'+rmoveExtraID+'">';
          appendExtra += '<div class="col-md-6">';
          appendExtra += '<a style="float: right;" href="javascript:void(0);" class="btn btn-danger block" onclick="removeExtraBlock('+rmoveExtraID+')"><i class="fas fa-trash-alt mr-2"></i>Delete Extra</a>';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '<hr style="border-top: 1px solid #343a40;">';

          rmoveExtraID++;
      $("#newExtra").last().append(appendExtra);
      extra++; 
    });       
  });
  function removeItemBlock(id){
      $("#item_block_"+id).remove();
      item--;
  }
  function removeItemBtn(id){
      id = id - 2 ;
      $("#removeItemBtn_"+id).remove();
  }
  function removeExtraBlock(id){
      $("#extra_block_"+id).remove();
      extra--;
  }
  function removeExtraBtn(id){
      id = id - 2 ;
      $("#removeExtraBtn_"+id).remove();
  }
</script>
@endpush