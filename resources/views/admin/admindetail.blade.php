@extends('layouts.main')

@section('content')
    <h2>Admin Detail</h2>
    <div class="form">
        <div class="form-group">
            <label for="">Nama Admin</label>
            <input type="text" class="form-control" name="nama_admin" id="nama_admin" value="{{ $admin->nama_admin }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $admin->alamat }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ $admin->email }}" disabled>
        </div>
        <div class="form-group">
            <label for="">No. Hp</label>
            <input type="text" class="form-control" name="telepon" id="telepon" value="{{ $admin->telepon }}" disabled>
        </div>
         <div class="text-center mt-5">
            <a href="/admin/adminall" class="btn btn-primary btn-lg">Kembali</a>
         </div>
    </div>

    @endsection