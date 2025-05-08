<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('anggota_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anggota_id')->constrained('anggota')->onDelete('cascade');
            $table->foreignId('kegiatan_id')->constrained('kegiatan')->onDelete('cascade');
            $table->enum('status_hadir',['Hadir', 'Izin', 'Alpha']);
            $table->text('catatan');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('anggota_kegiatan');
    }
};
