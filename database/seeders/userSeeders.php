<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\hash;
use Database\Seeders\DB;

class userSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $userData = [
        [
            "name" => 'Dr. Febriani S.Kom, M.M.',
            "email" => "febriani@staff.gunadarma.ac.id",
            'username'=> "febriani@staff.gunadarma.ac.id",
            "password"=> bcrypt("12345678"),
            "role"=> "staff",
        ],[
            "name" => 'superadmin',
            "email"=> "superadmin@staff.gunadarma.ac.id",
            "username"=> 'superadmin@staff.gunadarma.ac.id',
            "password"=> bcrypt("super123"),
            "role"=> "admin",
        ]
            
        ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
