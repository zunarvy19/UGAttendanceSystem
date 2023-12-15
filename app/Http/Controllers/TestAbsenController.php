<?php

namespace App\Http\Controllers;

use App\Models\testAbsen;
use Illuminate\Http\Request;

class TestAbsenController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $validatedData = $request->validate([
            'kelas_id'=>'required',
            'minggu_id' => 'required',
            'tanggal' => 'required',
            // atur validasi lain jika diperlukan
        ]);

        // Simpan data ke dalam database menggunakan model
        testAbsen::create([
            'kelas_id'=> $request->input('kelas_id'),
            'minggu_id' => $request->input('minggu_id'),
            'tanggal' => $request->input('tanggal'),
            // tambahkan kolom lain jika ada
            // dd($request->all()),
        ]);

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
}
