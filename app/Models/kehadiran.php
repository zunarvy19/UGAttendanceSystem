<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kehadiran extends Model
{
    use HasFactory;

    public function mahasiswa() {
        return $this->belongsTo(Student::class, 'mahasiswa_id', 'id');
    }

    public function kelas(){
        return $this->belongsTo(daftarKelas::class, 'kelas_id', 'id');
    }

    public function minggu(){
        return $this->belongsTo(minggu::class);
    }

    protected $table = 'kehadiran';
}


