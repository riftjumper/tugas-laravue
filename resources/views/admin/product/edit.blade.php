@extends('layouts.admin')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{url('product')}}">Produk</a></li>
<li class="breadcrumb-item active">Edit</li>
@endsection
@section('title','Buat Data Baru')
@section('content-header','Buat Data Baru')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Buat Data Baru</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{url('product/'.$product->id)}}">
                @csrf
                {{ method_field('PUT') }}
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Nama Produk</label>
                  <input value="{{$product->name}}" name="name" type="text" class="form-control" id="name" placeholder="Nama Produk">
                </div>
                <div class="form-group">
                  <label for="price">Harga</label>
                  <input value="{{$product->price}}" name="price" type="number" class="form-control" id="price" placeholder="Masukan Harga">
                </div>
                <div class="form-group">
                  <label for="stock">Stok</label>
                  <input value="{{$product->stock}}" name="stock" type="number" class="form-control" id="price" placeholder="Jumlah Barang">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="" class="form-control" required>
                      <option value="" disabled>Choose status</option>
                      <option value="active" {{$product->status=="active"?'selected':''}}>Aktif</option>
                      <option value="inactive" {{$product->status=="active"?'selected':''}}>Tidak Aktif</option>
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