<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\data_siswa;
use App\data_raport;

class data_absen extends Model
{
    protected $table = 'data_absen';
    protected $fillable = [
        'sakit', 'izin', 'alpha', 'data_siswa_id', 'data_kelas_id'
    ];
    public function detail_siswa(){
        return $this->hasOne(data_siswa::class, 'id', 'data_siswa_id');
    }

    public function data_kelas()
    {
        return $this->belongsTo(data_kelas::class);
    }
}
