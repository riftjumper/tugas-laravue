@extends('layouts.admin')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{url('user')}}">Edit User</a></li>
<li class="breadcrumb-item active">Edit</li>
@endsection
@section('title','Buat User Baru')
@section('content-header','Buat User Baru')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ubah Data User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ url('user/'.$user->id)}}">
                @csrf
                {{ method_field('PUT') }}
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input value="{{$user->email}}" type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama User</label>
                    <input value="{{$user->name}}" type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="User Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Role</label>
                    <select name="role" id="" class="form-control" required>
                        <option value="" disabled>Choose Role</option>
                        <option value="kasir" {{$user->role=="kasir"?'selected':''}}>Kasir</option>
                        <option value="non-kasir"{{$user->role=="non-kasir"?'selected':''}}>Non Kasir</option>
                    </select>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
    </div>
</div>
@endsection