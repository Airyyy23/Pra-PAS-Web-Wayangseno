<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        return view('pelanggan.pelangganall', [
            "title" => "Pelanggan",
            "pelanggan" => Pelanggan::all(),
        ]);
    }

    public function show($pelanggan)
    {
        $pelangganModel = Pelanggan::find($pelanggan);

        if (!$pelangganModel) {
            return abort(404);
        }

        return view('pelanggan.pelanggandetail', [
            "title" => "Detail Pelanggan",
            "pelanggan" => $pelangganModel,
        ]);
    }


    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.pelangganedit', [
            "title" => "Edit Pelanggan",
            "pelanggan" => $pelanggan,
        ]);
    }

    public function update(Request $request, $pelanggan)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required|numeric',
            'tanggal_registrasi' => 'required|date',
        ]);

        try {
            $pelangganModel = Pelanggan::findOrFail($pelanggan);
            $pelangganModel->update($request->all());

            return redirect()->route('pelanggan.index')->with('success', 'pelanggan berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui pelanggan. Silakan coba lagi.');
        }
    }

    public function destroy($pelanggan)
    {
        try {
            $pelangganModel = Pelanggan::findOrFail($pelanggan);
            $pelangganModel->delete();

            return redirect()->route('pelanggan.index')->with('success', 'pelanggan berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('pelanggan.index')->with('error', 'Gagal menghapus pelanggan. Silakan coba lagi.');
        }
    }

    public function create()
    {
        return view('pelanggan.pelanggantambah', [
            'title' => 'Tambah Data Pelanggan',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required|numeric',
            'tanggal_registrasi' => 'required|date',
        ]);

        try {
            Pelanggan::create($request->all());

            return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan pelanggan. Silakan coba lagi.');
        }
    }
}