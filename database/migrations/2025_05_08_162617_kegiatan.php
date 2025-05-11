<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('anggota_id')->constrained('anggota')->onDelete('cascade');
            $table->foreignId('divisi_id')->constrained('divisi')->onDelete('cascade');
            $table->string('nama_kegiatan', 100);
            $table->text('deskripsi');
            $table->string('lokasi', 100);
            $table->date('tanggal');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('kegiatan');
    }
};
