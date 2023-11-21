@extends('layouts.main')

@section('content')
   <h1>Data Admin</h1>
   <table class="table table-info table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Admin</th>
          <th scope="col">Email</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
         @php
            $no = 1;
         @endphp
        @foreach ($admin as $admin)
        <tr>
          <th scope="row">{{ $no++ }}</th>
          <td>{{ $admin->nama_admin }}</td>
          <td>{{ $admin->email }}</td>
          <td>
            <a href="/admin/admindetail/{{ $admin->id }}" class="btn btn-primary">Detail</a>
            <a href="/admin/adminedit/{{ $admin->id }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('admin.destroy', ['admin' => $admin->id]) }}" method="POST" style="display: inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="/admin/admintambah" class="btn btn-success">Tambah Data</a>
@endsection
