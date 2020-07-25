<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_kelas extends Model
{
    protected $table = 'data_kelas';
    protected $fillable = [
        'tingkatan', 'jurusan', 'nama_kelas'
    ];

    public function data_siswa()
    {
        return $this->hasMany(data_siswa::class);
    }

    // public function data_absen()
    // {
    // 	return $this->hasOne(data_absen::class);
    // }
}
