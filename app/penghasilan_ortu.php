<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\data_siswa;
use App\tanggungan_ortu;
use App\saudara_serumah;




class penghasilan_ortu extends Model
{
    protected $table = 'penghasilan_ortu';
    protected $fillable = [
        'data_siswa_id', 'kerja_ayah', 'penghasilan_ayah', 'kerja_ibu', 'penghasilan_ibu',
        'penghasilan_total'
    ];

    public function detail_siswa(){
        return $this->hasOne(data_siswa::class, 'id', 'data_siswa_id');
    }

    public function detail_tanggungan(){
        return $this->hasOne(tanggungan_ortu::class, 'data_siswa_id', 'data_siswa_id');
    }

    public function detail_saudara(){
        return $this->hasOne(saudara_serumah::class, 'data_siswa_id', 'data_siswa_id');
    }
}
