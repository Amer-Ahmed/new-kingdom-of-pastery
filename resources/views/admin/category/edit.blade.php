@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Category</h1>
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
            <form action="{{ route('admin.category.update' , $category->id) }}" method="POST" enctype="multipart/form-data" id="add-category">
             @csrf
             @method('PATCH')
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputArabicName">Arabic Name</label>
                      <input type="text" class="form-control" id="exampleInputArabicName" placeholder="Enter Arabic Name" name="name_ar" value="{{$category->name_ar}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEnglishName">English Name</label>
                      <input type="text" class="form-control" id="exampleInputEnglishName" placeholder="Enter English Name" name="name_en" value="{{$category->name_en}}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputArabicDescription">Arabic Description</label>
                      <textarea class="form-control" id="exampleInputArabicDescription" placeholder="Enter Arabic Description" name="description_ar">{{$category->description_ar}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEnglishDescription">English Description</label>
                      <textarea class="form-control" id="exampleInputEnglishDescription" placeholder="Enter English Description" name="description_en">{{$category->description_en}}</textarea>
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
                                  Item Details
                                </a>
                              </h4>
                            </div>
                            <div id="collapseItem" class="panel-collapse in collapse" style="">
                              <div class="row">
                                <div class="col-md-6">
                                  <a style="float: right;" href="javascript:void(0);" class="btn btn-primary block" id="add_new_item" ><i class="fas fa-plus mr-2"></i>Add Item</a>
                                </div>
                              </div>
                              <div class="newItem">
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
                                  Extra Details
                                </a>
                              </h4>
                            </div>
                            <div id="collapseExtra" class="panel-collapse in collapse" style="">
                              <div class="row">
                                <div class="col-md-6">
                                  <a style="float: right;" href="javascript:void(0);" class="btn btn-primary block" id="add_new_extra" ><i class="fas fa-plus mr-2"></i>Add Extra</a>
                                </div>
                              </div>
                              <div class="newExtra">
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
  var rmoveItemID = 0; 
  var rmoveExtraID = 0;
  $( document ).ready(function() {
    init(); 
    $("#add_new_item").click(function (event) {
      var appendItem =  '<div class="container" id="item_block_'+rmoveItemID+'">';
          appendItem += '<h3 class="card-title">Item #'+item+'</h3>';
          appendItem += '<div class="card-body">';
          appendItem += '<div class="row container-fluid">';
          appendItem += '<div class="col-md-6">';
          appendItem += '<div class="form-group">';
          appendItem += '<label>Item Arabic Name'+item+'</label>';
          appendItem += '<input type="text" class="form-control" placeholder="Enter Item Arabic Name" name="Item['+rmoveItemID+'][name_ar]">';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '<div class="col-md-6">';
          appendItem += '<div class="form-group">';
          appendItem += '<label>Item English Name'+item+'</label>';
          appendItem += '<input type="text" class="form-control" placeholder="Enter Item English Name" name="Item['+rmoveItemID+'][name_en]">';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '<div class="row">';
          appendItem += '<div class="col-md-12">';
          appendItem +=  '<div class="form-group">';
          appendItem += '<label>Item Arabic Description'+item+'</label>';
          appendItem += '<textarea class="form-control" placeholder="Enter Item Arabic Description" name="Item['+rmoveItemID+'][description_ar]"></textarea>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '<div class="row">';
          appendItem += '<div class="col-md-12">';
          appendItem +=  '<div class="form-group">';
          appendItem += '<label>Item English Description'+item+'</label>';
          appendItem += '<textarea class="form-control" placeholder="Enter Item English Description" name="Item['+rmoveItemID+'][description_en]"></textarea>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '<div class="row">';
          appendItem +=  '<div class="col-md-6">';
          appendItem += '<div class="form-group">';
          appendItem += '<label>Item Price'+item+'</label>';
          appendItem += '<input type="text" class="form-control" placeholder="Enter Item Price" name="Item['+rmoveItemID+'][price]">';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '<div class="col-md-6">';
          appendItem +=  '<div class="form-group">';
          appendItem += '<label>Item Calories'+item+'</label>';
          appendItem += '<input type="text" class="form-control" placeholder="Enter Item Calories" name="Item['+rmoveItemID+'][calories]">';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '<div class="row">';
          appendItem += '<div class="col-md-12">';
          appendItem += '<div class="form-group">';
          appendItem += '<label>Image'+item+'</label>';
          appendItem += '<div class="input-group">';
          appendItem += '<div class="custom-file">';
          appendItem += '<input type="file" class="custom-file-input" name="Item['+rmoveItemID+'][image]">';
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
      $(".newItem").last().append(appendItem);
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
          appendExtra += '<input type="text" class="form-control" placeholder="Enter Extra Arabic Name" name="Extra['+rmoveExtraID+'][name_ar]">';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '<div class="col-md-6">';
          appendExtra += '<div class="form-group">';
          appendExtra += '<label>Extra English Name'+extra+'</label>';
          appendExtra += '<input type="text" class="form-control" placeholder="Enter Extra English Name" name="Extra['+rmoveExtraID+'][name_en]">';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '<div class="row">';
          appendExtra += '<div class="col-md-12">';
          appendExtra +=  '<div class="form-group">';
          appendExtra += '<label>Extra Arabic Description'+extra+'</label>';
          appendExtra += '<textarea class="form-control" placeholder="Enter Extra Arabic Description" name="Extra['+rmoveExtraID+'][description_ar]"></textarea>';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '<div class="row">';
          appendExtra += '<div class="col-md-12">';
          appendExtra +=  '<div class="form-group">';
          appendExtra += '<label>Extra English Description'+extra+'</label>';
          appendExtra += '<textarea class="form-control" placeholder="Enter Extra English Description" name="Extra['+rmoveExtraID+'][description_en]"></textarea>';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '<div class="row">';
          appendExtra +=  '<div class="col-md-6">';
          appendExtra += '<div class="form-group">';
          appendExtra += '<label>Extra Price'+extra+'</label>';
          appendExtra += '<input type="text" class="form-control" placeholder="Enter Extra Price" name="Extra['+rmoveExtraID+'][price]">';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '<div class="col-md-6">';
          appendExtra +=  '<div class="form-group">';
          appendExtra += '<label>Extra Calories'+extra+'</label>';
          appendExtra += '<input type="text" class="form-control" placeholder="Enter Extra Calories" name="Extra['+rmoveExtraID+'][calories]">';
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
      $(".newExtra").last().append(appendExtra);
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

  function init()
  {
    @foreach($items as $item)
      var appendItem =  '<div class="container" id="item_block_'+rmoveItemID+'">';
          appendItem += '<h3 class="card-title">Item #'+item+'</h3>';
          appendItem += '<div class="card-body">';
          appendItem += '<div class="row container-fluid">';
          appendItem += '<div class="col-md-6">';
          appendItem += '<div class="form-group">';
          appendItem += '<label>Item Arabic Name'+item+'</label>';
          appendItem += '<input type="text" class="form-control" placeholder="Enter Item Arabic Name" name="Item['+rmoveItemID+'][name_ar]" value="{{$item->name_ar}}">';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '<div class="col-md-6">';
          appendItem += '<div class="form-group">';
          appendItem += '<label>Item English Name'+item+'</label>';
          appendItem += '<input type="text" class="form-control" placeholder="Enter Item English Name" name="Item['+rmoveItemID+'][name_en]" value="{{$item->name_en}}">';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '<div class="row">';
          appendItem += '<div class="col-md-12">';
          appendItem +=  '<div class="form-group">';
          appendItem += '<label>Item Arabic Description'+item+'</label>';
          appendItem += '<textarea class="form-control" placeholder="Enter Item Arabic Description" name="Item['+rmoveItemID+'][description_ar]">{{$item->description_ar}}</textarea>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '<div class="row">';
          appendItem += '<div class="col-md-12">';
          appendItem +=  '<div class="form-group">';
          appendItem += '<label>Item English Description'+item+'</label>';
          appendItem += '<textarea class="form-control" placeholder="Enter Item English Description" name="Item['+rmoveItemID+'][description_en]">{{$item->description_en}}</textarea>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '<div class="row">';
          appendItem +=  '<div class="col-md-6">';
          appendItem += '<div class="form-group">';
          appendItem += '<label>Item Price'+item+'</label>';
          appendItem += '<input type="text" class="form-control" placeholder="Enter Item Price" name="Item['+rmoveItemID+'][price]" value="{{$item->price}}">';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '<div class="col-md-6">';
          appendItem +=  '<div class="form-group">';
          appendItem += '<label>Item Calories'+item+'</label>';
          appendItem += '<input type="text" class="form-control" placeholder="Enter Item Calories" name="Item['+rmoveItemID+'][calories]" value="{{$item->calories}}">';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '</div>';
          appendItem += '<div class="row">';
          appendItem += '<div class="col-md-12">';
          appendItem += '<div class="form-group">';
          appendItem += '<label>Image'+item+'</label>';
          appendItem += '<div class="input-group">';
          appendItem += '<div class="custom-file">';
          appendItem += '<input type="file" class="custom-file-input" name="Item['+rmoveItemID+'][image]">';
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
      $(".newItem").last().append(appendItem);
      item++;  
    @endforeach

    @foreach($extras as $extra)
      var appendExtra =  '<div class="container" id="extra_block_'+rmoveExtraID+'">';
          appendExtra += '<h3 class="card-title">Extra #'+extra+'</h3>';
          appendExtra += '<div class="card-body">';
          appendExtra += '<div class="row container-fluid">';
          appendExtra += '<div class="col-md-6">';
          appendExtra += '<div class="form-group">';
          appendExtra += '<label>Extra Arabic Name'+extra+'</label>';
          appendExtra += '<input type="text" class="form-control" placeholder="Enter Extra Arabic Name" name="Extra['+rmoveExtraID+'][name_ar]" value="{{$extra->name_ar}}">';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '<div class="col-md-6">';
          appendExtra += '<div class="form-group">';
          appendExtra += '<label>Extra English Name'+extra+'</label>';
          appendExtra += '<input type="text" class="form-control" placeholder="Enter Extra English Name" name="Extra['+rmoveExtraID+'][name_en]" value="{{$extra->name_en}}">';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '<div class="row">';
          appendExtra += '<div class="col-md-12">';
          appendExtra +=  '<div class="form-group">';
          appendExtra += '<label>Extra Arabic Description'+extra+'</label>';
          appendExtra += '<textarea class="form-control" placeholder="Enter Extra Arabic Description" name="Extra['+rmoveExtraID+'][description_ar]">{{$extra->description_ar}}</textarea>';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '<div class="row">';
          appendExtra += '<div class="col-md-12">';
          appendExtra +=  '<div class="form-group">';
          appendExtra += '<label>Extra English Description'+extra+'</label>';
          appendExtra += '<textarea class="form-control" placeholder="Enter Extra English Description" name="Extra['+rmoveExtraID+'][description_en]">{{$extra->description_en}}</textarea>';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '<div class="row">';
          appendExtra +=  '<div class="col-md-6">';
          appendExtra += '<div class="form-group">';
          appendExtra += '<label>Extra Price'+extra+'</label>';
          appendExtra += '<input type="text" class="form-control" placeholder="Enter Extra Price" name="Extra['+rmoveExtraID+'][price]" value="{{$extra->price}}">';
          appendExtra += '</div>';
          appendExtra += '</div>';
          appendExtra += '<div class="col-md-6">';
          appendExtra +=  '<div class="form-group">';
          appendExtra += '<label>Extra Calories'+extra+'</label>';
          appendExtra += '<input type="text" class="form-control" placeholder="Enter Extra Calories" name="Extra['+rmoveExtraID+'][calories]" value="{{$extra->calories}}">';
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
      $(".newExtra").last().append(appendExtra);
      extra++; 
    @endforeach
  }
</script>
@endpush