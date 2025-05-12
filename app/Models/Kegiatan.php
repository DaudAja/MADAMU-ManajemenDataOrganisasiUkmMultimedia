<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Anggota;

class Kegiatan extends Model
{

    protected $table = 'kegiatan';
    protected $fillable = ['nama_kegiatan', 'deskripsi', 'lokasi', 'tanggal'];

    public function anggotas()
    {
     return $this->belongsToMany(Anggota::class, 'anggota_kegiatan')
                ->withPivot('status_hadir', 'catatan')
                ->withTimestamps();
    }


}
