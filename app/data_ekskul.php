<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\data_siswa;
use App\data_raport;

class data_ekskul extends Model
{
    protected $table = 'data_ekskul';
    protected $fillable = [
        'nm_ekskul', 'ket_ekskul','data_siswa_id', 'data_kelas_id'
    ];

    public function detail_siswa()
    {
        return $this->hasOne(data_siswa::class, 'id', 'data_siswa_id');
    }

    public function data_kelas()
    {
        return $this->belongsTo(data_kelas::class);
    }
}
