<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\data_siswa;
use App\tanggungan_ortu;
use App\penghasilan_ortu;


class saudara_serumah extends Model
{
    protected $table = 'saudara_serumah';
    protected $fillable = [
        'data_siswa_id', 'kakak', 'adik', 'total'
    ];

    public function detail_siswa(){
        return $this->hasOne(data_siswa::class, 'id', 'data_siswa_id');
    }

    public function detail_tanggungan(){
        return $this->hasOne(tanggungan_ortu::class, 'data_siswa_id', 'data_siswa_id');
    }

    public function detail_penghasilan(){
        return $this->hasOne(penghasilan_ortu::class, 'data_siswa_id', 'data_siswa_id');
    }
}
