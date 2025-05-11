<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisiSeeder extends Seeder
{

    public function run(): void
    {
         DB::table('divisi')->insert([
            ['nama_divisi' => 'Visual foto', 'created_at' => now(), 'updated_at' => now()],
            ['nama_divisi' => 'Visual', 'created_at' => now(), 'updated_at' => now()],
            ['nama_divisi' => 'Visual anu', 'created_at' => now(), 'updated_at' => now()],
            ['nama_divisi' => 'Visual poto', 'created_at' => now(), 'updated_at' => now()],
            // ['nama_divisi' => 'Branding'],
            // ['nama_divisi' => 'Sosial media management'],
            // ['nama_divisi' => 'Audio video'],
            // ['nama_divisi' => 'Motion graphics']
        ]);
    }
}
