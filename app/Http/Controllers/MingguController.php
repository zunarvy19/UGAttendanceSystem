<?php

namespace App\Http\Controllers;
use app\Models\minggu;
use Illuminate\Http\Request;

class MingguController extends Controller
{
    public function datamahasiswa(){
      $cariminggu = minggu::all();
      return view("main.inputabsen", compact("dataminggu"));
    }
}
