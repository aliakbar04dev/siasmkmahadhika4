<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class acc_beasiswa extends Model
{
    protected $table = 'acc_beasiswa';
    protected $fillable = [
        'data_siswa_id','penghasilan_ortu_id','tanggungan_ortu_id','saudara_serumah_id','status'
    ];
}
