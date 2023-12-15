<?php

namespace App\Http\Controllers;
use App\Models\daftarKelas;
use Illuminate\Http\Request;

class DaftarKelasController extends Controller
{
    public function datamahasiswa(){
        $datamahasiswa = daftarKelas::all();
        $datakelas = daftarKelas::all();
        return view("main.datamahasiswa",[
            "title" => 'Data Mahasiswa'
        ], compact('datamahasiswa', 'datakelas'));
    }

}
