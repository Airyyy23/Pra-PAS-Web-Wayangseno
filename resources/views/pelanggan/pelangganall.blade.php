@extends('layouts.main')

@section('content')
   <h1>Data Barang</h1>
   <table class="table table-info table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Pelanggan</th>
          <th scope="col">Alamat</th>
          <th scope="col">Email</th>
          <th scope="col">No. Hp</th>
          <th scope="col">Tanggal Registrasi</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
         @php
            $no = 1;
         @endphp
        @foreach ($pelanggan as $pelanggan)
        <tr>
          <th scope="row">{{ $no++ }}</th>
          <td>{{ $pelanggan->nama_pelanggan }}</td>
          <td>{{ $pelanggan->alamat }}</td>
          <td>{{ $pelanggan->email }}</td>
          <td>{{ $pelanggan->telepon }}</td>
          <td>{{ $pelanggan->tanggal_registrasi }}</td>
          <td>
            <a href="/pelanggan/pelanggandetail/{{ $pelanggan->id }}" class="btn btn-primary">Detail</a>
            <a href="/pelanggan/pelangganedit/{{ $pelanggan->id }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('pelanggan.destroy', ['pelanggan' => $pelanggan->id]) }}" method="POST" style="display: inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="/pelanggan/pelanggantambah" class="btn btn-success">Tambah Data</a>
@endsection
