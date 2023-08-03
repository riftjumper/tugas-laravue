@extends('layouts.admin')

@section('breadcrumb')
<li class="breadcrumb-item active">Edit User</li>
@endsection
@section('title','Edit User')
@section('content-header','Edit User')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                  <a href="{{ url('user/create')}}" class="btn btn-sm btn-primary pull-right">
                    Buat User Baru
                </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key=> $user)    
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->role}}</td>
                          <td>
                                <a href="{{ url('user/'.$user->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>  
                                
                                <form action="{{ url('user',['id'=>$user->id]) }}" method="POST">
                                  <input class="btn btn-danger btn-sm" type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                  @method('delete')
                                  @csrf
                                </form>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card -->
        </div>
    </div>
@endsection