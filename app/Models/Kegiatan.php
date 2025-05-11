<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Anggota;

class Kegiatan extends Model
{


    protected $table = 'kegiatan';
    protected $fillable = ['divisi_id' ,'nama_kegiatan', 'deskripsi', 'lokasi', 'tanggal'];

    public function divisi() {
    return $this->belongsTo(Divisi::class);
    }

    // Public function anggotas() {
    // return $this->belongsToMany(Anggota::class);
    // }

    public function anggotas()
{
     return $this->belongsToMany(Anggota::class, 'anggota_kegiatan')
                ->withPivot('status_hadir', 'catatan')
                ->withTimestamps();
}


}
