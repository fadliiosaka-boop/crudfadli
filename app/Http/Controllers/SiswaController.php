<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // TAMPILKAN SEMUA DATA
    public function index()
    {
        $data = Siswa::all();
        return view('siswa.index', compact('data'));
    }

    // TAMPILKAN FORM TAMBAH
    public function create()
    {
        return view('siswa.create');
    }

    // SIMPAN DATA
    public function store(Request $request)
    {
        Siswa::create($request->all());
        return redirect()->route('siswa.index');
    }

    // (Tidak dipakai, biarkan kosong saja)
    public function show(Siswa $siswa)
    {
        //
    }

    // TAMPILKAN FORM EDIT
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    // UPDATE DATA
    public function update(Request $request, Siswa $siswa)
    {
        $siswa->update($request->all());
        return redirect()->route('siswa.index');
    }

    // HAPUS DATA
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}