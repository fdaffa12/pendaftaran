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

    public function dokumen(){
      return $this->hasOne('App\Dokumen', 'users', 'id')->withDefault(['kartu_keluarga'=>null,'akta'=>null,'r_kel5_sem1'=>null,'r_kel5_sem2'=>null,'r_kel6_sem1'=>null,'prestasi'=>null,'kis'=>null]);
    }

    public function nilai(){
      return $this->hasOne('App\Nilai', 'users', 'id')->withDefault(['n_bing_kel5_sem1'=>null,'n_bing_kel5_sem2'=>null,'n_bing_kel6_sem1'=>null,'n_pai_kel5_sem1'=>null,'n_pai_kel5_sem2'=>null,'n_pai_kel6_sem1'=>null,'n_bind_kel5_sem1'=>null,'n_bind_kel5_sem2'=>null,'n_bind_kel6_sem1'=>null, 'rata_bind'=>null, 'rata_bing'=>null, 'rata_pai'=>null]);
    }
}
