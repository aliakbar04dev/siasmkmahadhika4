<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_bimbingan extends Model
{
    protected $table = 'data_bimbingan';
    protected $fillable = [
        'nm_siswa', 'nm_kelas', 'keluhan', 'respon'
    ];
}
