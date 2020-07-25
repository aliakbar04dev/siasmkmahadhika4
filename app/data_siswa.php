<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\data_absen;
use App\data_raport;
use App\data_ekskul;
use App\tanggungan_ortu;
use App\penghasilan_ortu;
use App\saudara_serumah;

class data_siswa extends Model
{

    protected $table = 'data_siswa';
    protected $fillable = [
        'nis', 'nisn', 'nama_siswa', 'jenis_kelamin', 'tempat_lahir',
        'tgl_lahir', 'agama', 'alamat', 'nama_ayah', 'nama_ibu',
        'pekerjaan_ortu', 'data_kelas_id'
    ];

    public function data_kelas()
    {
    	return $this->belongsTo(data_kelas::class);
    }

    public function detail_absen()
    {
        return $this->hasOne(data_absen::class, 'data_siswa_id', 'id');
    }

    public function detail_raport()
    {
        return $this->hasOne(data_raport::class, 'data_siswa_id', 'id');
    }

    public function detail_ekskul()
    {
        return $this->hasOne(data_ekskul::class, 'data_siswa_id', 'id');
    }

    public function detail_tanggungan()
    {
        return $this->hasOne(tanggungan_ortu::class, 'data_siswa_id', 'id');
    }

    public function detail_penghasilan()
    {
        return $this->hasOne(penghasilan_ortu::class, 'data_siswa_id', 'id');
    }

    public function detail_saudara()
    {
        return $this->hasOne(saudara_serumah::class, 'data_siswa_id', 'id');
    }
}
