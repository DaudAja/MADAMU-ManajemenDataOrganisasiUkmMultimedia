<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{

    protected $table = 'users';
    protected $fillable = [ 'username', 'email', 'password', 'role'];

    public function anggota() {
    return $this->hasOne(Anggota::class);
}

}
