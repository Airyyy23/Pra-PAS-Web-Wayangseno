<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.adminall', [
            "title" => "admin",
            "admin" => Admin::all(),
        ]);
    }

    public function show($admin)
    {
        $adminModel = Admin::find($admin);

        if (!$adminModel) {
            return abort(404);
        }

        return view('admin.admindetail', [
            "title" => "Detail Admin",
            "admin" => $adminModel,
        ]);
    }


    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.adminedit', [
            "title" => "Edit admin",
            "admin" => $admin,
        ]);
    }

    public function update(Request $request, $admin)
    {
        $request->validate([
            'nama_admin' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required|numeric',
        ]);

        try {
            $adminModel = Admin::findOrFail($admin);
            $adminModel->update($request->all());

            return redirect()->route('admin.index')->with('success', 'admin berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui admin. Silakan coba lagi.');
        }
    }

    public function destroy($admin)
    {
        try {
            $adminModel = Admin::findOrFail($admin);
            $adminModel->delete();

            return redirect()->route('admin.index')->with('success', 'admin berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('admin.index')->with('error', 'Gagal menghapus admin. Silakan coba lagi.');
        }
    }

    public function create()
    {
        return view('admin.admintambah', [
            'title' => 'Tambah Data Admin',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_admin' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required|numeric',
        ]);

        try {
            Admin::create($request->all());

            return redirect()->route('admin.index')->with('success', 'admin berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan admin. Silakan coba lagi.');
        }
    }
}