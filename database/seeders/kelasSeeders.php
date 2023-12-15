<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kelasSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("daftar_kelas")->insert([
            [
                "nama_kelas" => "3KA01",
            ],
            [
                "nama_kelas"=> "3KA02",
            ],
            [
                "nama_kelas" => "3KA10",
            ],
            [
                "nama_kelas" => "3KA17",
            ],
        ]);
    }
}
