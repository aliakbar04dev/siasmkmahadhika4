<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_mapel extends Model
{
    protected $table = 'data_mapel';
    protected $fillable = [
        'nama_mapel', 'data_guru_id'
    ];

    public function data_guru()
    {
    	return $this->belongsTo(data_guru::class);
    }
}








