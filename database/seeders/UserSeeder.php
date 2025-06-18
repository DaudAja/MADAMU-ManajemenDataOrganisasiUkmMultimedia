<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('users')->insert([
            ['username' => 'Admin', 'email' => 'Admin@gmail.com', 'password' => Hash::make('1'), 'role' => 'admin', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
