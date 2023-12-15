<?php

namespace App\Http\Controllers;

use  App\Models\kehadiran;
use Illuminate\Http\Request;

class lamanrekap extends Controller
{
    public function lamanrekap(){
        // Ambil data absensi dari database
        $datahadir = Kehadiran::all(); // Ganti sesuai dengan cara pengambilan data yang dibutuhkan
        dd($datahadir);
        // Kirim data absensi ke view
        return view ('main.rekaplaman', compact('datahadir'),[
            "title" => 'Rekap Absensi'
        ]);
    }

    public function inputrekap(){
        
    }
}
