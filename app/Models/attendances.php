<?php

namespace App\Models;

use App\Http\Controllers\MingguController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attendances extends Model
{
    use HasFactory;
    public function daftar_kelas(){
        return $this->belongsTo(daftarKelas::class);
    }   
    protected $fillable = ['kelas_id', 'minggu_id', 'tanggal'];
    public function minggu(){
        return $this->belongsTo(MingguController::class);
    }
}
