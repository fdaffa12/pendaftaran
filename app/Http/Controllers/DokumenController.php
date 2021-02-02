<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokumen;

class DokumenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $dt = Dokumen::where('users',\Auth::user()->id)->first();
      $cek = Dokumen::where('users',\Auth::user()->id)->count();

      return view ('biodata.dokumen', compact('dt','cek'));
    }

    public function storeDokumen(Request $request,$id){

        $kartu_keluarga = $request->file('kartu_keluarga');
        if($kartu_keluarga){
            $nama_file = $kartu_keluarga->getClientOriginalName();
            $kartu_keluarga->move('biodata_dokument',$nama_file);
            $data['kartu_keluarga'] = 'biodata_dokument/'.$nama_file;
        }

        $akta = $request->file('akta');
        if($akta){
            $nama_file = $akta->getClientOriginalName();
            $akta->move('biodata_dokument',$nama_file);
            $data['akta'] = 'biodata_dokument/'.$nama_file;
        }

        $r_kel5_sem1 = $request->file('r_kel5_sem1');
        if($r_kel5_sem1){
            $nama_file = $r_kel5_sem1->getClientOriginalName();
            $r_kel5_sem1->move('biodata_dokument',$nama_file);
            $data['r_kel5_sem1'] = 'biodata_dokument/'.$nama_file;
        }

        $r_kel5_sem2 = $request->file('r_kel5_sem2');
        if($r_kel5_sem2){
            $nama_file = $r_kel5_sem2->getClientOriginalName();
            $r_kel5_sem2->move('biodata_dokument',$nama_file);
            $data['r_kel5_sem2'] = 'biodata_dokument/'.$nama_file;
        }

        $r_kel6_sem1 = $request->file('r_kel6_sem1');
        if($r_kel6_sem1){
            $nama_file = $r_kel6_sem1->getClientOriginalName();
            $r_kel6_sem1->move('biodata_dokument',$nama_file);
            $data['r_kel6_sem1'] = 'biodata_dokument/'.$nama_file;
        }

        $prestasi = $request->file('prestasi');
        if($prestasi){
            $nama_file = $prestasi->getClientOriginalName();
            $prestasi->move('biodata_dokument',$nama_file);
            $data['prestasi'] = 'biodata_dokument/'.$nama_file;
        }

        $kis = $request->file('kis');
        if($kis){
            $nama_file = $kis->getClientOriginalName();
            $kis->move('biodata_dokument',$nama_file);
            $data['kis'] = 'biodata_dokument/'.$nama_file;
        }

        $data['users'] = $id;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        Dokumen::insert($data);

        return redirect()->back()->with('success','Sukses Ditambahkan');
    }

    public function updateDokumen(Request $request, $id){

        // $data['users'] = $id;
        // $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $kartu_keluarga = $request->file('kartu_keluarga');
        if($kartu_keluarga){
            $nama_file = $kartu_keluarga->getClientOriginalName();
            $kartu_keluarga->move('biodata_dokument',$nama_file);
            $data['kartu_keluarga'] = 'biodata_dokument/'.$nama_file;
        }

        $akta = $request->file('akta');
        if($akta){
            $nama_file = $akta->getClientOriginalName();
            $akta->move('biodata_dokument',$nama_file);
            $data['akta'] = 'biodata_dokument/'.$nama_file;
        }

        $r_kel5_sem1 = $request->file('r_kel5_sem1');
        if($r_kel5_sem1){
            $nama_file = $r_kel5_sem1->getClientOriginalName();
            $r_kel5_sem1->move('biodata_dokument',$nama_file);
            $data['r_kel5_sem1'] = 'biodata_dokument/'.$nama_file;
        }

        $r_kel5_sem2 = $request->file('r_kel5_sem2');
        if($r_kel5_sem2){
            $nama_file = $r_kel5_sem2->getClientOriginalName();
            $r_kel5_sem2->move('biodata_dokument',$nama_file);
            $data['r_kel5_sem2'] = 'biodata_dokument/'.$nama_file;
        }

        $r_kel6_sem1 = $request->file('r_kel6_sem1');
        if($r_kel6_sem1){
            $nama_file = $r_kel6_sem1->getClientOriginalName();
            $r_kel6_sem1->move('biodata_dokument',$nama_file);
            $data['r_kel6_sem1'] = 'biodata_dokument/'.$nama_file;
        }

        $prestasi = $request->file('prestasi');
        if($prestasi){
            $nama_file = $prestasi->getClientOriginalName();
            $prestasi->move('biodata_dokument',$nama_file);
            $data['prestasi'] = 'biodata_dokument/'.$nama_file;
        }

        $kis = $request->file('kis');
        if($kis){
            $nama_file = $kis->getClientOriginalName();
            $kis->move('biodata_dokument',$nama_file);
            $data['kis'] = 'biodata_dokument/'.$nama_file;
        }

        Dokumen::where('users', $id)->update($data);

        return redirect()->back()->with('success','Sukses Diupdate');
    }
}
