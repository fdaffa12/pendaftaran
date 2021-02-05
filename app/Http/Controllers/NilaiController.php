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

      $rata_bing = Nilai::all()->where('users',\Auth::user()->id)->sum(function($t){
        return ($t->n_bing_kel5_sem1 + $t->n_bing_kel5_sem2 + $t->n_bing_kel6_sem1)/3;
      });

      $rata_bind = Nilai::all()->where('users',\Auth::user()->id)->sum(function($t){
        return ($t->n_bind_kel5_sem1 + $t->n_bind_kel5_sem2 + $t->n_bind_kel6_sem1)/3;
      });

      $rata_pai = Nilai::all()->where('users',\Auth::user()->id)->sum(function($t){
        return ($t->n_pai_kel5_sem1 + $t->n_pai_kel5_sem2 + $t->n_pai_kel6_sem1)/3;
      });

      return view('nilai.index', compact('dt', 'cek','rata_bing', 'rata_bind', 'rata_pai'));
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
          'rata_bing' => 'required',
          'rata_bind' => 'required',
          'rata_pai' => 'required',
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
      $data['n_bing_kel6_sem1'] = $request->n_bing_kel6_sem1;
      $data['rata_bing'] = $request->rata_bing;
      $data['rata_bind'] = $request->rata_bind;
      $data['rata_pai'] = $request->rata_pai;
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
          'rata_bing' => 'required',
          'rata_bind' => 'required',
          'rata_pai' => 'required',
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
      $data['rata_bing'] = $request->rata_bing;
      $data['rata_bind'] = $request->rata_bind;
      $data['rata_pai'] = $request->rata_pai;
      // $data['created_at'] = date('Y-m-d H:i:s');
      $data['updated_at'] = date('Y-m-d H:i:s');

      Nilai::where('users', $id)->update($data);

      return redirect()->back()->with('success','Sukses Diupdate');
    }
}
