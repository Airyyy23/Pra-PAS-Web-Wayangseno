@extends('layouts.main')

@section('content')
    <h2>Pelanggan Detail</h2>
    <div class="form">
        <div class="form-group">
            <label for="">Nama Pelanggan</label>
            <input type="text" class="form-control" name="nama_pelanggan" id="nama_pelanggan" value="{{ $pelanggan->nama_pelanggan }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $pelanggan->alamat }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ $pelanggan->email }}" disabled>
        </div>
        <div class="form-group">
            <label for="">No. Hp</label>
            <input type="text" class="form-control" name="telepon" id="telepon" value="{{ $pelanggan->telepon }}" disabled>
        </div>
         <div class="form-group">
            <label for="">Tanggal Registrasi</label>
            <input type="text" class="form-control" name="tanggal_registrasi" id="tanggal_registrasi" value="{{ $pelanggan->tanggal_registrasi }}" disabled>
         </div>
         <div class="text-center mt-5">
            <a href="/pelanggan/pelangganall" class="btn btn-primary btn-lg">Kembali</a>
         </div>
    </div>

    @endsection