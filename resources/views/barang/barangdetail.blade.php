@extends('layouts.main')

@section('content')
    <h1>Barang Detail</h1>
    <div class="form">
        <div class="form-group">
            <label for="">Barang</label>
            <input type="text" class="form-control" name="barang" id="barang" value="{{ $barang->nama_barang }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Kategori</label>
            <input type="text" class="form-control" name="kategori" id="kategori" value="{{ $barang->kategori }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga" value="{{ 'Rp ' . number_format($barang->harga, 0, ',', '.') }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Stok</label>
            <input type="text" class="form-control" name="stok" id="stok" value="{{ $barang->stok }}" disabled>
        </div>
         <div class="form-group">
            <label for="">Tanggal Masuk</label>
            <input type="text" class="form-control" name="tanggal_masuk" id="tanggal_masuk" value="{{ $barang->tanggal_masuk }}" disabled>
         </div>
         <div class="text-center mt-5">
            <a href="/" class="btn btn-primary btn-lg">Kembali</a>
         </div>
        </div>

    @endsection