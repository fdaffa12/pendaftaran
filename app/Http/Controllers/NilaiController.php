<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nilai;

class NilaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $dt = Nilai::where('users',\Auth::user()->id)->first();
      $cek = Nilai::where('users',\Auth::user()->id)->count();

      return view('nilai.index', compact('dt', 'cek'));
    }

    public function storeNilai(Request $request, $id){
      $this->validate($request,[
          'n_pai_kel5_sem1'=>'required',
          'n_pai_kel5_sem2'=>'required',
          'n_pai_kel6_sem1'=>'required',
          'n_bind_kel5_sem1'=>'required',
          'n_bind_kel5_sem2'=>'required',
          'n_bind_kel6_sem1'=>'required',
          'n_bing_kel5_sem1'=>'required',
          'n_bing_kel5_sem2'=>'required',
          'n_bing_kel6_sem1'=>'required',
      ]);

      $data['users'] = $id;
      $data['n_pai_kel5_sem1'] = $request->n_pai_kel5_sem1;
      $data['n_pai_kel5_sem2'] = $request->n_pai_kel5_sem2;
      $data['n_pai_kel6_sem1'] = $request->n_pai_kel6_sem1;
      $data['n_bind_kel5_sem1'] = $request->n_bind_kel5_sem1;
      $data['n_bind_kel5_sem2'] = $request->n_bind_kel5_sem2;
      $data['n_bind_kel6_sem1'] = $request->n_bind_kel6_sem1;
      $data['n_bing_kel5_sem1'] = $request->n_bing_kel5_sem1;
      $data['n_bing_kel5_sem2'] = $request->n_bing_kel5_sem2;
      $data['n_bing_kel6_sem1'] = $request->n_bing_kel6_sem1;
      $data['created_at'] = date('Y-m-d H:i:s');
      $data['updated_at'] = date('Y-m-d H:i:s');

      Nilai::insert($data);

      return redirect()->back()->with('success','Sukses Ditambahkan');
    }

    public function updateNilai(Request $request, $id){
      $this->validate($request,[
          'n_pai_kel5_sem1'=>'required',
          'n_pai_kel5_sem2'=>'required',
          'n_pai_kel6_sem1'=>'required',
          'n_bind_kel5_sem1'=>'required',
          'n_bind_kel5_sem2'=>'required',
          'n_bind_kel6_sem1'=>'required',
          'n_bing_kel5_sem1'=>'required',
          'n_bing_kel5_sem2'=>'required',
          'n_bing_kel6_sem1'=>'required',
      ]);

      // $data['users'] = $id;
      $data['n_pai_kel5_sem1'] = $request->n_pai_kel5_sem1;
      $data['n_pai_kel5_sem2'] = $request->n_pai_kel5_sem2;
      $data['n_pai_kel6_sem1'] = $request->n_pai_kel6_sem1;
      $data['n_bind_kel5_sem1'] = $request->n_bind_kel5_sem1;
      $data['n_bind_kel5_sem2'] = $request->n_bind_kel5_sem2;
      $data['n_bind_kel6_sem1'] = $request->n_bind_kel6_sem1;
      $data['n_bing_kel5_sem1'] = $request->n_bing_kel5_sem1;
      $data['n_bing_kel5_sem2'] = $request->n_bing_kel5_sem2;
      $data['n_bing_kel6_sem1'] = $request->n_bing_kel6_sem1;
      // $data['created_at'] = date('Y-m-d H:i:s');
      $data['updated_at'] = date('Y-m-d H:i:s');

      Nilai::where('users', $id)->update($data);

      return redirect()->back()->with('success','Sukses Diupdate');
    }
}
