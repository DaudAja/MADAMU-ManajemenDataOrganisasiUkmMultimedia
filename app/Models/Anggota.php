<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kegiatan;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';
    protected $fillable = ['nama_lengkap', 'alamat', 'no_hp', 'users_id', 'divisi_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function divisi() {
        return $this->belongsTo(Divisi::class);
    }

    public function kegiatan(): BelongsToMany
{
    return $this->belongsToMany(Kegiatan::class, 'anggota_kegiatan')
                ->withPivot('status_hadir', 'catatan')
                ->withTimestamps();
}


}
