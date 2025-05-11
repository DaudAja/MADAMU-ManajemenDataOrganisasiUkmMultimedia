<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KegiatanSeeder extends Seeder
{

    public function run(): void
    {
         DB::table('kegiatan')->insert([
            ['divisi_id' => '1', 'nama_kegiatan' => 'Recruitment', 'Deskripsi' => 'Peneriman anggota baru ukm multimedia', 'lokasi' => 'Perpustakaan', 'tanggal' => '2025-03-24', 'created_at' => now(), 'updated_at' => now()],
            ['divisi_id' => '2', 'nama_kegiatan' => 'Pembelajarn Branding', 'Deskripsi' => 'pembelajaran', 'lokasi' => 'Pelataran', 'tanggal' => '2025-04-27', 'created_at' => now(), 'updated_at' => now()],
            ['divisi_id' => '3', 'nama_kegiatan' => 'Pembelajaran Photografy', 'Deskripsi' => 'pembelajaran', 'lokasi' => 'Gedung kembar', 'tanggal' => '2025-05-25', 'created_at' => now(), 'updated_at' => now()],
            ['divisi_id' => '4', 'nama_kegiatan' => 'Pembelajaran visual video', 'Deskripsi' => 'pembelajaran', 'lokasi' => 'Pelataran Gedung kembar', 'tanggal' => '2025-07-26', 'created_at' => now(), 'updated_at' => now()],
            // ['divisi_id' => '5', 'nama_kegiatan' => 'Rapat kerja', 'Deskripsi' => 'Rapat', 'lokasi' => 'cafe', 'tanggal' => '2025-08-24', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
