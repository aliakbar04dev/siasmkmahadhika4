<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\data_siswa;
use App\penghasilan_ortu;
use App\saudara_serumah;



class tanggungan_ortu extends Model
{
    protected $table = 'tanggungan_ortu';
    protected $fillable = [
        'data_siswa_id', 'status_rumah', 'tag_kontrakan', 'tag_listrik', 'tag_air',
        'tag_total'
    ];

    public function detail_siswa(){
        return $this->hasOne(data_siswa::class, 'id', 'data_siswa_id');
    }

    public function detail_penghasilan(){
        return $this->hasOne(penghasilan_ortu::class, 'data_siswa_id', 'data_siswa_id');
    }

    public function detail_saudara(){
        return $this->hasOne(saudara_serumah::class, 'data_siswa_id', 'data_siswa_id');
    }
}
