<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\authController;
use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendancesController;
use App\Http\Controllers\DaftarKelasController;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\lamanrekap;
use App\Http\Controllers\TestAbsenController;
use App\Models\attendances;
use App\Models\daftarKelas;
use App\Exports\KehadiranExport;
use Maatwebsite\Excel\Facades\Excel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


route::get('/login', [authController::class,'index'])->name('index')->middleware('guest');
route::post('/login', [authController::class,'login'])->name('login');
Route::post('/logout', [authController::class, 'logout'])->name('logout');
Route::post('/change-password', [AuthController::class, 'changePassword'])->name('changePassword');

// dashboard view
Route::get('/dashboard', [studentController::class,'dashboard'])->name('dashboard')->middleware('auth');

// Data mahasiswa view
Route::get('/datamahasiswa', [daftarKelasController::class,'datamahasiswa'])->name('datamahasiswa');

// view form input absen
route::get('/inputabsen', [AttendancesController::class,'inputabsen'])->name('inputabsen');

// view profile
route::get('/viewprofile', [studentController::class,'viewprofile'])->name('viewprofile');

//view kelas
route::get('/viewkelas', [DaftarKelasController::class,'cariKelas'])->name('cariKelas');
route::get('/view3ka01', [studentController::class,'view3ka01'])->name('view3ka01');
route::get('/view3ka02', [studentController::class,'view3ka02'])->name('view3ka02');
route::get('/view3ka10', [studentController::class,'view3ka10'])->name('view3ka10 ');
route::get('/view3ka17', [studentController::class,'view3ka17'])->name('view3ka17');

// route absensi
Route::post('/attendances/store', [AttendancesController::class, 'store'])->name('attendances.store');

//route kehadiran
route::get('/formAbsensi', [KehadiranController::class,'formAbsensi'])->name('formAbsensi');
Route::post('/kehadiran/setor', [KehadiranController::class, 'setor'])->name('kehadiran.setor');

// route hasil rekap
route::get('/viewrekap', [KehadiranController::class, 'viewrekap'])->name("viewrekap");
route::get('/rekaplaman',[KehadiranController::class, 'rekaplaman'])->name('rekaplaman');
Route::get('/processReport', [KehadiranController::class, 'processReport'])->name('processReport');
// download hasil rekap
route::get('/export-absensi', [KehadiranController::class, 'exportToExcel'])->name('export.absensi');
Route::get('/download-excel', [KehadiranController::class, 'downloadExcel'])->name('downloadExcel');
