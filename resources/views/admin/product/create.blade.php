@extends('layouts.admin')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{url('product')}}">Produk</a></li>
<li class="breadcrumb-item active">Buat Data Baru</li>
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
                <form method="POST" action="{{url('product')}}">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Nama Produk</label>
                      <input name="name" type="text" class="form-control" id="name" required placeholder="Nama Produk">
                    </div>
                    <div class="form-group">
                      <label for="price">Harga</label>
                      <input name="price" type="number" class="form-control" id="price" required placeholder="Masukan Harga">
                    </div>
                    <div class="form-group">
                      <label for="stock">Stok</label>
                      <input name="stock" type="number" class="form-control" id="price" required placeholder="Jumlah Barang">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="" class="form-control" required>
                          <option value="" disabled selected>Choose status</option>
                          <option value="active">Aktif</option>
                          <option value="inactive">Tidak Aktif</option>
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