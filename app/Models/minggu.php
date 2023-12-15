<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class minggu extends Model
{
    use HasFactory;

    public function cariminggu(){
        $cariminggu = minggu::cariminggu();
        return view('main.daftarkelas', [$cariminggu]);
    }
}
