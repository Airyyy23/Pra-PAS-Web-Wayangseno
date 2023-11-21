@extends('layouts.main')

@section('content')
    <h1>Edit Admin</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.update', ['admin' => $admin->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_admin" class="form-label">Nama admin</label>
            <input type="text" class="form-control" id="nama_admin" name="nama_admin" value="{{ $admin->nama_admin }}" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $admin->alamat }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $admin->email }}" required>
        </div>

        <div class="mb-3">
            <label for="telepon" class="form-label">No. Hp</label>
            <input type="number" class="form-control" id="telepon" name="telepon" value="{{ $admin->telepon }}" required>
        </div>

        <div class="mb-3">
         <label for="tanggal_registrasi" class="form-label">Tanggal Registrasi</label>
         <input type="date" class="form-control" id="tanggal_registrasi" name="tanggal_registrasi" value="{{ $admin->tanggal_registrasi }}" required>
     </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
