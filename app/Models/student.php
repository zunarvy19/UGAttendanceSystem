<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    public function daftarKelas(){
        return $this->belongsTo(daftarKelas::class);
    }

    public function kehadiran() {
        return $this->hasMany(Kehadiran::class, 'mahasiswa_id', 'id');
    }
}
