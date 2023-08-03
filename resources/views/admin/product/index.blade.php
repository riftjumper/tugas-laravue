@extends('layouts.admin')

@section('breadcrumb','Produk')
@section('title','Produk')
@section('content-header','Produk')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                  <a href="{{ url('product/create')}}" class="btn btn-sm btn-primary pull-right">
                    Buat Data Baru
                </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key=> $product)    
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$product->name}}</td>
                          <td>{{"Rp ".number_format($product->price,2,',','.')}}</td>
                          <td>{{$product->stock}}</td>
                          <td>{{$product->status}}</td>
                          <td>
                            <a href="{{ url('product/'.$product->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>  
                                
                                <form action="{{ url('product',['id'=>$product->id]) }}" method="POST">
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