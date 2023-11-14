<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return view('barang.barangall', [
            "title" => "Barang",
            "barang" => Barang::all(),
        ]);
    }

    public function show($barang)
    {
        $barangModel = Barang::find($barang);

        if (!$barangModel) {
            return abort(404);
        }

        return view('barang.barangdetail', [
            "title" => "Detail Barang",
            "barang" => $barangModel,
        ]);
    }


    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.barangedit', [
            "title" => "Edit Barang",
            "barang" => $barang,
        ]);
    }

    public function update(Request $request, $barang)
    {
        $request->validate([
            'nama_barang' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'tanggal_masuk' => 'required|date',
        ]);

        try {
            $barangModel = Barang::findOrFail($barang);
            $barangModel->update($request->all());

            return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui barang. Silakan coba lagi.');
        }
    }

    public function destroy($barang)
    {
        try {
            $barangModel = Barang::findOrFail($barang);
            $barangModel->delete();

            return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('barang.index')->with('error', 'Gagal menghapus barang. Silakan coba lagi.');
        }
    }

    public function create()
    {
        return view('barang.barangtambah', [
            'title' => 'Tambah Data Barang',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'tanggal_masuk' => 'required|date',
        ]);

        try {
            Barang::create($request->all());

            return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan barang. Silakan coba lagi.');
        }
    }
}