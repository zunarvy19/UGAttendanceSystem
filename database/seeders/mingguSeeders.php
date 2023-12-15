<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mingguSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("minggus")->insert([
            [
                "minggu" => "M1",
            ],
            [
                "minggu" => "M2",
            ],
            [
                "minggu" => "M3",
            ],
            [
                "minggu" => "M4",
            ],
            [
                "minggu" => "M5",
            ],
            [
                "minggu" => "M6",
            ],
            [
                "minggu" => "M7",
            ],
            [
                "minggu" => "M8",
            ],
            [
                "minggu" => "M9",
            ],
            [
                "minggu" => "M10",
            ],
            [
                "minggu" => "M11",
            ],
            [
                "minggu" => "M12",
            ],
            [
                "minggu" => "M13",
            ],
            [
                "minggu" => "M14",
            ],
           
        ]);
    }
}
