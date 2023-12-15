<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use App\Models\daftarKelas;
use App\Models\attendances;
use App\Models\minggu;

class AttendancesController extends Controller
{
    public function store(Request $request)
    {
        $datakelas = daftarKelas::all();
        $cariminggu = minggu::all();

        $absensi = new attendances;
        $absensi->kelas_id = $request->input('kelas_id');
        $absensi->minggu_id = $request->input('minggu_id');
        $absensi->tanggal = $request->input('tanggal');
        $absensi->save();


        $students = Student::where('kelas_id', $request->input('kelas_id'))->get();
        $dataAbsensi = attendances::latest()->first();
        // dd($students);
        return view('main.formAbsensi',[
            "title"=>'Absensi'
        ], compact('students', 'dataAbsensi', 'datakelas', 'cariminggu'));
    }
    
    public function inputabsen(){
        $cariminggu = minggu::all();
        $datakelas = daftarKelas::all();
        return view('main.inputabsen',[
            'title' => 'Absensi'
        ], compact('datakelas' , 'cariminggu'));
    }
    
    }

