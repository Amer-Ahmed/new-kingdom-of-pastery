@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Users</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.user.create')}}">Add New User</a></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Image</th>
              <th>User Name</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as  $user)
              <tr>
                <td><img src="{{ url( 'storage/' . $user->image) }}"  width="50" height="50"/></td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                  <a href="{{ route('admin.user.edit', $user->id) }}"
                     class="btn btn-primary btn-circle btn-sm"><i class="fas fa-edit"></i>
                  </a>
                  <a onclick="deleteUser('{{ 'delete-user-' . $user->id }}')"
                     href="javascript:;" class="btn btn-danger btn-circle btn-sm"
                     title="delete">
                      <i class="fas fa-trash"></i>
                  </a>
                  <!-- Form Delete user -->
                  <form
                      action="{{ route('admin.user.destroy', $user->id) }}"
                      method="POST"
                      id="{{ 'delete-user-' . $user->id }}">
                      @csrf
                      @method('DELETE')
                  </form>
                  <!-- End Delete user -->
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
<script>
  function deleteUser(id) {
      event.preventDefault();
      Swal.fire({
          title: 'Are you sure to delete this user ?',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          cancelButtonColor: '#3085d6',
          confirmButtonText: 'Delete'
      }).then(function(result){
          if (result.value) {
              $('#' + id).submit();
              swal('user successfully deleted', {
                  icon: 'success',
              });
          } else if (result.dismiss === 'cancel') {
              swal.fire(
                  'Cancel Delete',
                  'Do not worry',
                  'error',
              );
          }
      });
  }
</script>
@endpush