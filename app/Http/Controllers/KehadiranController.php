<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Exports\KehadiranExport;
use App\Models\Kehadiran;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\minggu;
use App\Models\daftarKelas;
use Maatwebsite\Excel\Facades\Excel;

class KehadiranController extends Controller
{
    public function formAbsensi()
    {
        $dataAbsensi = Kehadiran::latest()->first(); // Ambil data absensi terbaru

        return view('main.formAbsensi', compact('dataAbsensi'), [
            'title' => 'Absensi'
        ]);
    }

    public function setor(Request $request)
    {

        $datakelas = daftarKelas::all();
        $cariminggu = minggu::all();

        $kelas_id = $request->kelas_id;
        $minggu_id = $request->minggu_id;
        $tanggal = $request->tanggal;

        $students = Student::where('kelas_id', $kelas_id)->get(); // Ambil mahasiswa berdasarkan kelas

        foreach ($students as $student) {
            $status_kehadiran = $request->input('kehadiran' . $student->id);
            
            if (!$status_kehadiran) {
                $status_kehadiran = 'Alfa';
            }
            // Simpan data kehadiran ke database
            $absensi = new Kehadiran();
            $absensi->kelas_id = $kelas_id;
            $absensi->minggu_id = $minggu_id;
            $absensi->tanggal = $tanggal;
            $absensi->mahasiswa_id = $student->id;
            $absensi->status_kehadiran = $status_kehadiran;
            $absensi->save();
        }

        $datahadir = Kehadiran::with(['mahasiswa', 'kelas'])->get();

        return view('main.dashboard', [
            'datakelas' => $datakelas,
            'cariminggu' => $cariminggu,
            "datahadir" => $datahadir,
            'absensi'=> $absensi,
            "title" => 'Rekap Absen'
        ]);

        
    }
    public function viewrekap(){
        $cariminggu = minggu::all();
        $datakelas = daftarKelas::all();
        return view('main.rekap',[
            'title' => 'Rekap Absensi'
        ], compact('datakelas' , 'cariminggu'));
    }

    public function processReport(Request $request){
        $search = $request->input('search'); 
        $cariminggu = Minggu::all();
        $datakelas = DaftarKelas::all();
        $kehadiran = Kehadiran::query();
        
        if ($request->filled('kelas_id')) {
            $kehadiran->where('kelas_id', $request->kelas_id);
        }
        
        if ($request->filled('minggu_id')) {
            $kehadiran->whereIn('minggu_id', $request->minggu_id);
        }
        
        if ($request->filled('status_kehadiran')) {
            $kehadiran->where('status_kehadiran', $request->status_kehadiran);
        }
    
        if ($search) {
            $kehadiran->where('status_kehadiran', 'like', '%' . $search . '%');
        }
    
        $datahadir = $kehadiran->with(['mahasiswa', 'kelas'])->get();
    
        return view('main.rekaplaman', [
            'title' => 'Rekap Absensi',
            'datahadir' => $datahadir,
            'datakelas' => $datakelas,
            'cariminggu' => $cariminggu,
        ]);
    }
    

    public function exportToExcel()
    {
        
        return Excel::download(new KehadiranExport(), 'kehadiran.xlsx');
    }
    

}
