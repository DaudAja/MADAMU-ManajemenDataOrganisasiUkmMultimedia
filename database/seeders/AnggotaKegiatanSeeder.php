<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaKegiatanSeeder extends Seeder
{

    public function run(): void
    {
         DB::table('anggota_kegiatan')->insert([
            ['anggota_id' => '1', 'kegiatan_id' => '1', 'status_hadir' => 'hadir', 'catatan' => 'Hadir', 'created_at' => now(), 'updated_at' => now()],
            ['anggota_id' => '2', 'kegiatan_id' => '2', 'status_hadir' => 'hadir', 'catatan' => 'Hadir', 'created_at' => now(), 'updated_at' => now()],
            ['anggota_id' => '3', 'kegiatan_id' => '3', 'status_hadir' => 'hadir', 'catatan' => 'Hadir', 'created_at' => now(), 'updated_at' => now()],
            ['anggota_id' => '4', 'kegiatan_id' => '4', 'status_hadir' => 'hadir', 'catatan' => 'Hadir', 'created_at' => now(), 'updated_at' => now()],
            // ['anggota_id' => '5', 'kegiatan_id' => '5', 'status_hadir' => 'hadir', 'catatan' => 'Hadir', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
