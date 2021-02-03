<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class PesertaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $data = User::withCount('biodata_r')->orderBy('name','asc')->get();

      return view ('admin.peserta.index', compact('data'));
    }

    public function detail($name){
  		$peserta = User::where('name', $name)->first();
  		return view('admin.peserta.detail', compact('peserta'));
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
}
