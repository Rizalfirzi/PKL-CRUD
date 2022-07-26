<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    public $fillable = ['nis','nama', 'alamat_siswa','tgl_lahir'];
    public $timestamps = true;

    public function wali()
    {
        return $this->hasOne(Wali::class, 'id_siswa');
    }
}
