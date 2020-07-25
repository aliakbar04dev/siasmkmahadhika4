<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\data_siswa;
use App\data_absen;
use App\data_ekskul;

class data_raport extends Model
{
    protected $table = 'data_raport';
    protected $fillable = [
        'ulangan_harian', 'tugas', 'uts', 'uas', 'rata', 'data_siswa_id', 'data_kelas_id', 'data_absen_id'
    ];

    public function detail_siswa()
    {
        return $this->hasOne(data_siswa::class, 'id', 'data_siswa_id');
    }

    public function detail_absen()
    {
        return $this->belongsTo(data_absen::class);
    }

    public function detail_ekskul()
    {
        return $this->belongsTo(data_absen::class);
    }

    public function data_kelas()
    {
        return $this->belongsTo(data_kelas::class);
    }
}
