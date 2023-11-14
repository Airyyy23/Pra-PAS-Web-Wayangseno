@extends('layouts.main')

@section('content')
    <h1>Tambah Data Pelanggan</h1>

    <form action="{{ route('pelanggan.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
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