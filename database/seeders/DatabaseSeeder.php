<?php

namespace Database\Seeders;

use App\Http\Controllers\AnggotaKegiatanController;
use App\Models\User;
use App\Models\Anggota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            DivisiSeeder::class,
            AnggotaSeeder::class,
            KegiatanSeeder::class,
            AnggotaKegiatanSeeder::class
        ]);
    }
}
