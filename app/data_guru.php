<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_guru extends Model
{
  
    protected $table = 'data_guru';
    protected $fillable = [
        'nip', 'nama_guru', 'j_kelamin', 'alamat', 'mulai_kerja',
        'lulusan', 'tahun', 'tugas_lain'
    ];

    public function data_mapel()
    {
        return $this->hasMany(data_mapel::class);
    }

}
