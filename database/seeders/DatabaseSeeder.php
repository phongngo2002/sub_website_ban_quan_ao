<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $teaCherSeed = [
        ];
        $users = [];
        for ($i = 1; $i < 101 ;$i++){
            $teaCherSeed[] = [
                "ten_gv" => 'Ngo Van A' . $i,
                "ngay_giang_day" => "2022-07-01",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ];
        }
        DB::table('teachers')->insert($teaCherSeed);
        DB::table('users')->insert([
                'name' => "Poly",
                'email' => 'poly@gmail.com',
                'password' => Hash::make('123456')
        ]);
    }
}
