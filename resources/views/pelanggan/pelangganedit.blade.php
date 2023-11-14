@extends('layouts.main')

@section('content')
    <h1>Edit Pelanggan</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('pelanggan.update', ['pelanggan' => $pelanggan->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="{{ $pelanggan->nama_pelanggan }}" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $pelanggan->alamat }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $pelanggan->email }}" required>
        </div>

        <div class="mb-3">
            <label for="telepon" class="form-label">No. Hp</label>
            <input type="number" class="form-control" id="telepon" name="telepon" value="{{ $pelanggan->telepon }}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_registrasi" class="form-label">Tanggal Registrasi</label>
            <input type="date" class="form-control" id="tanggal_registrasi" name="tanggal_registrasi" value="{{ $pelanggan->tanggal_registrasi }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
