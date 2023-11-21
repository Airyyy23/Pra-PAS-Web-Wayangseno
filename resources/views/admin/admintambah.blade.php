@extends('layouts.main')

@section('content')
    <h1>Tambah Data Admin</h1>

    <form action="{{ route('admin.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama_admin" class="form-label">Nama admin</label>
            <input type="text" class="form-control" id="nama_admin" name="nama_admin" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="telepon" class="form-label">No. Hp</label>
            <input type="number" class="form-control" id="telepon" name="telepon" required>
        </div>

        <div class="mb-3">
         <label for="tanggal_registrasi" class="form-label">Tanggal Registrasi</label>
         <input type="date" class="form-control" id="tanggal_registrasi" name="tanggal_registrasi" required>
     </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection