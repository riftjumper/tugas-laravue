@extends('layouts.admin')

@section('breadcrumb', 'Transaksi')
@section('title', 'Transaksi')
@section('content-header', 'Transaksi')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('transaction/create')}}" class="btn btn-sm btn-primary pull-right">
                        Buat Transaksi Baru
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Nama Kasir</th>
                                <th>Produk</th>
                                <th>Jumlah Pembelian</th>
                                <th>Status Pembayaran</th>
                                <th>Tanggal Transaksi</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($transactions as $key=> $transaction)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$transaction->user->name}}</td>
                                    <td>{{$transaction->product->name}}</td>
                                    <td>{{$transaction->qty}}</td>
                                    <td>{{$transaction->payment_status}}</td>
                                    <td>{{$transaction->date_start}}</td>
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
