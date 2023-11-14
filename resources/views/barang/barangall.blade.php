@extends('layouts.main')

@section('content')
   <h1>Data Barang</h1>
   <table class="table table-info table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Kategori</th>
          <th scope="col">Harga</th>
          <th scope="col">Stok</th>
          <th scope="col">Tanggal Masuk</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
         @php
            $no = 1;
         @endphp
        @foreach ($barang as $item)
        <tr>
          <th scope="row">{{ $no++ }}</th>
          <td>{{ $item->nama_barang }}</td>
          <td>{{ 'Rp ' . number_format($item->harga, 0, ',', '.') }}</td>
          <td>{{ $item->stok }}</td>
          <td>
            <a href="/barang/barangdetail/{{ $item->id }}" class="btn btn-primary">Detail</a>
            <a href="/barang/barangedit/{{ $item->id }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('barang.destroy', ['barang' => $item->id]) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <a href="/barang/barangtambah" class="btn btn-success">Tambah Data</a>
@endsection
