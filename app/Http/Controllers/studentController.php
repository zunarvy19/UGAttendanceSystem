<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\daftarKelas;
use Illuminate\Http\Request;

class studentController extends Controller
{



    public function dashboard(){

        $totalMahasiswa = Student::count();
        $totalkelas = daftarKelas::count();


        return view("main.dashboard", [
            "title" => 'Dashboard',
            'totalkelas'=> $totalkelas,
            'totalMahasiswa' => $totalMahasiswa,
        ]);
    }

    public function viewprofile(){
        return view("main.profile", [
        
            "title" => "Profile"
        ]);
    }

    public function view3ka01(Request $request)
    {
        $search = $request->input('search'); // ambil input pencarian

        $total3ka01 = Student::where('kelas_id', 1)->count(); // itung total data dengan kelas_id = 1
        $data3ka01 = Student::where('kelas_id', 1)
            ->where(function($query) use ($search) {
                $query->where('nama', 'like', '%'.$search.'%', ) //berdasarkan nama
                ->orWhere('npm', 'like', '%'.$search.'%', ); // pencarian berdasarkan npm
                // tambah kriteria pencarian lain jika diperlukan
            })
            ->get(); // ambil data berdasarkan kelas_id = 1 dan kriteria pencarian

        return view('main.3ka01', [
            'data3ka01' => $data3ka01,
            'total3ka01' => $total3ka01,
            'title' => '3KA01' ,
        ]);
    }

    public function view3ka02(Request $request){
        $search = $request->input('search'); // ambil input pencarian

        $total3ka02 = Student::where('kelas_id', 2)->count(); // itung total data dengan kelas_id = 2
        $data3ka02 = Student::where('kelas_id', 2)
            ->where(function($query) use ($search) {
                $query->where('nama', 'like', '%'.$search.'%', ) //berdasarkan nama
                ->orWhere('npm', 'like', '%'.$search.'%', ); // pencarian berdasarkan npm
            })
            ->get(); // ambil data berdasarkan kelas_id = 1 dan kriteria pencarian

        return view('main.3ka02', [
            'data3ka02' => $data3ka02,
            'total3ka02' => $total3ka02,
            'title' => '3KA02' ,
        ]);

    
    }
    public function view3ka10(Request $request){
        $search = $request->input('search'); // ambil input pencarian

        $total3ka10 = Student::where('kelas_id', 3)->count(); // itung total data dengan kelas_id = 2
        $data3ka10 = Student::where('kelas_id', 3)
            ->where(function($query) use ($search) {
                $query->where('nama', 'like', '%'.$search.'%', ) //berdasarkan nama
                ->orWhere('npm', 'like', '%'.$search.'%', ); // pencarian berdasarkan npm
                // tambah kriteria pencarian lain jika diperlukan
            })
            ->get(); // ambil data berdasarkan kelas_id = 1 dan kriteria pencarian

        return view('main.3ka10', [
            'data3ka10' => $data3ka10,
            'total3ka10' => $total3ka10,
            'title' => '3KA10',
        ]);

    
    }
    public function view3ka17(Request $request){
        $search = $request->input('search'); // ambil input pencarian

        $total3ka17 = Student::where('kelas_id', 4)->count(); // itung total data dengan kelas_id = 4
        $data3ka17 = Student::where('kelas_id', 4)
            ->where(function($query) use ($search) {
                $query->where('nama', 'like', '%'.$search.'%', ) //berdasarkan nama
                ->orWhere('npm', 'like', '%'.$search.'%', ); // pencarian berdasarkan npm
                // tambah kriteria pencarian lain jika diperlukan
            })
            ->get(); // ambil data berdasarkan kelas_id = 4 dan kriteria pencarian

        return view('main.3ka17', [
            'data3ka17' => $data3ka17,
            'total3ka17' => $total3ka17,
            'title' => '3KA17',
        ]);

    
    }

}
