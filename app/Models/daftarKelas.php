<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftarKelas extends Model
{
    use HasFactory;

    public function student(){
        return $this->belongsTo(student::class);
    }
    
    protected $table = 'daftar_kelas';

    static public function getSingle($id){
        return self::find( $id );
    }

    public function kehadiran() {
        return $this->hasMany(Kehadiran::class, 'kelas_id', 'id');
    }
}

