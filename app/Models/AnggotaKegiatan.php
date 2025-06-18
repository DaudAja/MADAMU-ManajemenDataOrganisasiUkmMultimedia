<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AnggotaKegiatan extends Pivot
{
    protected $table = 'anggota_kegiatan';

    protected $fillable = ['anggota_id', 'kegiatan_id'];

    public $timestamps = true;

    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }
}
