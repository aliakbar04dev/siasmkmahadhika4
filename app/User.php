<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use App\Http\Controllers\Auth;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'nip', 'agama', 'mulai_bekerja', 'id_mengajar', 'id_kelas', 'id_jurusan',
        'no_induk', 'nisn', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir',
        'alamat', 'asal_sekolah', 'tgl_masuk', 'nama_ayah', 'nama_ibu', 'kerja_orangtua',
        'nama_wali', 'kerja_wali', 'foto', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
