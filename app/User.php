<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'level'
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

    public function biodata_r(){
      return $this->hasOne('App\BiodataSiswa', 'users', 'id')->withDefault(['nik'=>null,'nama'=>null,'tempat_lahir'=>null,'tanggal_lahir'=>null,'agama'=>null,'alamat'=>null,'asal_sekolah'=>null,'nisn'=>null]);
    }

    public function biodata_ibu(){
      return $this->hasOne('App\BiodataIbu', 'users', 'id')->withDefault(['nik'=>null,'nama_ibu'=>null,'tempat_lahir'=>null,'tanggal_lahir'=>null,'agama'=>null,'alamat'=>null,'phone'=>null,'pekerjaan'=>null]);
    }

    public function biodata_bpk(){
      return $this->hasOne('App\BiodataBapak', 'users', 'id')->withDefault(['nik'=>null,'nama_bapak'=>null,'tempat_lahir'=>null,'tanggal_lahir'=>null,'agama'=>null,'alamat'=>null,'phone'=>null,'pekerjaan'=>null]);
    }
}
