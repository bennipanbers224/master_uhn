<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Budi Santoso',
            'nim' => '2018001',
            'email' => 'budisantoso@gmail.com',
            'password'=>Hash::make('budi1234'),
            'role'=>'Mahasiswa'
        ]);

        DB::table('users')->insert([
            'name' => 'Administrator',
            'nim' => '0',
            'email' => 'admin@uhn.com',
            'password'=>Hash::make('admin123'),
            'role'=>'Admin'
        ]);
    }
}
