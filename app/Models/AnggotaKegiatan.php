<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AnggotaKegiatan extends pivot
{
    protected $table = 'anggota_kegiatan'; // nama tabel pivot tetap boleh pakai underscore
    protected $fillable = ['anggota_id', 'kegiatan_id', 'status_hadir', 'catatan'];

     public function anggota()
    {
        return $this->hasMany(Anggota::class);
    }

    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class);
    }
}

