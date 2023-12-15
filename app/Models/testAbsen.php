<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testAbsen extends Model
{
    use HasFactory;
    public function  daftarKelas(){
        return $this->belongsTo(daftarKelas::class);
    }

    public function minggu(){
        return $this->belongsTo(minggu::class);
    }
    protected $fillable = ['kelas_id','minggu_id', 'tanggal'];

}