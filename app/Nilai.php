<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilais';

    public function biodata_r(){
      return $this->belongsTo('App\BiodataSiswa', 'users', 'id')->withDefault(['nik'=>null,'nama'=>null,'tempat_lahir'=>null,'tanggal_lahir'=>null,'agama'=>null,'alamat'=>null,'asal_sekolah'=>null,'nisn'=>null]);
    }

    public function biodata_ibu(){
      return $this->belongsTo('App\BiodataIbu', 'users', 'id')->withDefault(['nik'=>null,'nama_ibu'=>null,'tempat_lahir'=>null,'tanggal_lahir'=>null,'agama'=>null,'alamat'=>null,'phone'=>null,'pekerjaan'=>null]);
    }

    public function biodata_bpk(){
      return $this->belongsTo('App\BiodataBapak', 'users', 'id')->withDefault(['nik'=>null,'nama_bapak'=>null,'tempat_lahir'=>null,'tanggal_lahir'=>null,'agama'=>null,'alamat'=>null,'phone'=>null,'pekerjaan'=>null]);
    }

    public function dokumen(){
      return $this->belongsTo('App\Dokumen', 'users', 'id')->withDefault(['kartu_keluarga'=>null,'akta'=>null,'r_kel5_sem1'=>null,'r_kel5_sem2'=>null,'r_kel6_sem1'=>null,'prestasi'=>null,'kis'=>null]);
    }

    public function nilai(){
      return $this->belongsTo('App\Nilai', 'users', 'id')->withDefault(['n_bing_kel5_sem1'=>null,'n_bing_kel5_sem2'=>null,'n_bing_kel6_sem1'=>null,'n_pai_kel5_sem1'=>null,'n_pai_kel5_sem2'=>null,'n_pai_kel6_sem1'=>null,'n_bind_kel5_sem1'=>null,'n_bind_kel5_sem2'=>null,'n_bind_kel6_sem1'=>null, 'rata_bind'=>null, 'rata_bing'=>null, 'rata_pai'=>null]);
    }
}
