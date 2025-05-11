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
            ['username' => 'Admin', 'email' => 'Admin@gmail.com', 'password' => Hash::make('1'), 'role' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'Ketua1', 'email' => 'Ketua1@gmail.com', 'password' => Hash::make('1'), 'role' => 'ketua', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'Ketua2', 'email' => 'Ketua2@gmail.com', 'password' => Hash::make('1'), 'role' => 'ketua', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'Ketua3', 'email' => 'Ketua3@gmail.com', 'password' => Hash::make('1'), 'role' => 'ketua', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'Ketua4', 'email' => 'Ketua4@gmail.com', 'password' => Hash::make('1'), 'role' => 'ketua', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'Ketua5', 'email' => 'Ketua5@gmail.com', 'password' => Hash::make('1'), 'role' => 'ketua', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'Anggota1', 'email' => 'Anggota1@gmail.com', 'password' => Hash::make('1'), 'role' => 'anggota', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'Anggota2', 'email' => 'Anggota2@gmail.com', 'password' => Hash::make('1'), 'role' => 'anggota', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'Anggota3', 'email' => 'Anggota3@gmail.com', 'password' => Hash::make('1'), 'role' => 'anggota', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'Anggota4', 'email' => 'Anggota4@gmail.com', 'password' => Hash::make('1'), 'role' => 'anggota', 'created_at' => now(), 'updated_at' => now()],
        ]);

    }
}
