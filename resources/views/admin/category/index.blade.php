@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Categories</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.category.create')}}">Add New Category</a></li>
          </ol>
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
              <th>Category Name</th>
              <th>Item</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as  $category)
            <tr>
              <td>{{$category->name_en}}</td>
              <td>
                @foreach($category->items as $item)
                  {{$item->name_en}}
                @endforeach
              </td>
              <td>
                <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary btn-circle btn-sm" title="edit"><i class="fa fa-edit"></i></a>
                <a onclick="deleteCategory('{{ 'delete-category-' . $category->id }}')"
                   href="#" class="btn btn-danger btn-circle btn-sm"
                   title="delete">
                    <i class="fas fa-trash"></i>
                </a>
                <!-- Form Delete category -->
                <form
                    action="{{ route('admin.category.destroy', $category->id) }}"
                    method="POST"
                    id="{{ 'delete-category-' . $category->id }}">
                    @csrf
                    @method('DELETE')
                </form>
                <!-- End Delete category -->
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>
@endsection
@push('js')
<script type="text/javascript">
  function deleteCategory(id) {
    event.preventDefault();
    swal({
        title: 'Are you sure to delete this category ?',
        text: 'Once the category has been deleted you cannot retrieve its data',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            $('#' + id).submit();
            swal('Category successfully deleted', {
                icon: 'success',
            });
        } else {
            swal('Category undeleted');
        }
    });
  }
</script>
@endpush