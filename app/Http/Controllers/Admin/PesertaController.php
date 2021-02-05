<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\BiodataSiswa;
use App\Nilai;
use App\NilaiRata;

class PesertaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $data = User::withCount('biodata_r')->where('level', null)->orderBy('name','asc')->get();

      return view ('admin.peserta.index', compact('data'));
    }

    public function edit($id){
      $dt = User::where('id', $id)->first();

      return view('admin.peserta.edit',compact('dt'));
    }

    public function detail($id){
  		$peserta = User::where('id', $id)->first();
      $rata_bind = Nilai::all()->where('users',$id)->sum(function($t){
        return ($t->n_bind_kel5_sem1 + $t->n_bind_kel5_sem2 + $t->n_bind_kel6_sem1)/3;
      });
      $rata_bing = Nilai::all()->where('users',$id)->sum(function($t){
        return ($t->n_bing_kel5_sem1 + $t->n_bing_kel5_sem2 + $t->n_bing_kel6_sem1)/3;
      });
      $rata_pai = Nilai::all()->where('users',$id)->sum(function($t){
        return ($t->n_pai_kel5_sem1 + $t->n_pai_kel5_sem2 + $t->n_pai_kel6_sem1)/3;
      });

      $rata_semua = Nilai::all()->where('users',$id)->sum(function($t){
        return ($t->n_pai_kel5_sem1 + $t->n_pai_kel5_sem2 + $t->n_pai_kel6_sem1 + $t->n_bind_kel5_sem1 + $t->n_bind_kel5_sem2 + $t->n_bind_kel6_sem1 + $t->n_bing_kel5_sem1 + $t->n_bing_kel5_sem2 + $t->n_bing_kel6_sem1)/9;
      });

  		return view('admin.peserta.detail', compact('peserta','rata_bind', 'rata_pai', 'rata_bing', 'rata_semua'));
    }

    public function updatePeserta(Request $request,$id){
        try {

            // update data kedalam table biodata
            $biodata['nik'] = $request->nik;
            $biodata['nama'] = $request->nama;
            $biodata['tempat_lahir'] = $request->tempat_lahir;
            $biodata['tanggal_lahir'] = $request->tanggal_lahir;
            $biodata['agama'] = $request->agama;
            $biodata['alamat'] = $request->alamat;
            $biodata['asal_sekolah'] = $request->asal_sekolah;
            $biodata['nisn'] = $request->nisn;
            $biodata['updated_at'] = date('Y-m-d H:i:s');

            BiodataSiswa::where('users',$id)->update($biodata);

            \Session::flash('sukses','Data peserta berhasil di update');

        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }

        return redirect()->back()->with('success', 'Data Berhasil Diupdate');
    }

    public function verifikasiNilai(Request $request,$id){
        try {

            $data['n_pai_kel5_sem1'] = $request->n_pai_kel5_sem1;
            $data['n_pai_kel5_sem2'] = $request->n_pai_kel5_sem2;
            $data['n_pai_kel6_sem1'] = $request->n_pai_kel6_sem1;
            $data['n_bind_kel5_sem1'] = $request->n_bind_kel5_sem1;
            $data['n_bind_kel5_sem2'] = $request->n_bind_kel5_sem2;
            $data['n_bind_kel6_sem1'] = $request->n_bind_kel6_sem1;
            $data['n_bing_kel5_sem1'] = $request->n_bing_kel5_sem1;
            $data['n_bing_kel5_sem2'] = $request->n_bing_kel5_sem2;
            $data['n_bing_kel6_sem1'] = $request->n_bing_kel6_sem1;
            $data['rata_bing'] = $request->rata_bing;
            $data['rata_bind'] = $request->rata_bind;
            $data['rata_pai'] = $request->rata_pai;
            $data['rata_semua'] = $request->rata_semua;
            // $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');

            Nilai::where('users', $id)->update($data);

            \Session::flash('sukses','Data peserta berhasil di update');

        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }

        try {
            User::where('id',$id)->update([
                'is_nilai'=>1
            ]);

            \Session::flash('sukses','Peserta berhasil di luluskan');
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }

        return redirect()->back()->with('success', 'Data Berhasil Verifikasi Nilai');
    }

    public function verifikasiNilaiBatal($id){
          try {
              User::where('id',$id)->update([
                  'is_nilai'=>null
              ]);

              \Session::flash('sukses','Peserta berhasil di luluskan');
          } catch (\Exception $e) {
              \Session::flash('gagal',$e->getMessage());
          }

          return redirect()->back()->with('success','Sukses Membatalkan Verifikasi Nilai');
    }


    public function lulus($id){
          try {
              User::where('id',$id)->update([
                  'is_lulus'=>1
              ]);

              \Session::flash('sukses','Peserta berhasil di luluskan');
          } catch (\Exception $e) {
              \Session::flash('gagal',$e->getMessage());
          }

          return redirect()->back()->with('success','Sukses Diluluskan');
    }

    public function lulusBatal($id){
          try {
              User::where('id',$id)->update([
                  'is_lulus'=>null
              ]);

              \Session::flash('sukses','Peserta berhasil di luluskan');
          } catch (\Exception $e) {
              \Session::flash('gagal',$e->getMessage());
          }

          return redirect()->back()->with('success','Sukses Membatalkan Kelulusan');
    }

    public function verifikasi($id){
          try {
              User::where('id',$id)->update([
                  'is_verifikasi'=>1
              ]);

              \Session::flash('sukses','Peserta berhasil di luluskan');
          } catch (\Exception $e) {
              \Session::flash('gagal',$e->getMessage());
          }

          return redirect()->back()->with('success','Sukses Diverifikasi');
    }

    public function verifikasiBatal($id){
          try {
              User::where('id',$id)->update([
                  'is_verifikasi'=>null
              ]);

              \Session::flash('sukses','Peserta berhasil di luluskan');
          } catch (\Exception $e) {
              \Session::flash('gagal',$e->getMessage());
          }

          return redirect()->back()->with('success','Sukses Membatalkan Verifikasi');
    }

    public function delete($id){
        try {
            User::where('id',$id)->delete();

            \Session::flash('sukses','Data berhasil dihapus');
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->back()->with('success','Sukses Menghapus');
    }
}
