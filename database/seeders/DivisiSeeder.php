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
            ['nama_divisi' => 'Branding', 'created_at' => now(), 'updated_at' => now()],
            ['nama_divisi' => 'Sosial media management','created_at' => now(), 'updated_at' => now()],
            ['nama_divisi' => 'Audio video','created_at' => now(), 'updated_at' => now()],
            ['nama_divisi' => 'Motion graphics','created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
