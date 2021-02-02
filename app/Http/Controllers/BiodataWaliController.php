<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BiodataBapak;
use App\BiodataIbu;

class BiodataWaliController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function wali(){
      $dt = BiodataBapak::where('users',\Auth::user()->id)->first();
      $cek = BiodataBapak::where('users',\Auth::user()->id)->count();
      $dat = BiodataIbu::where('users',\Auth::user()->id)->first();
      $ck = BiodataIbu::where('users',\Auth::user()->id)->count();
      return view ('biodata.wali', compact('dt','cek','dat','ck'));
    }

    public function storeBapak(Request $request,$id){
      $this->validate($request,[
          'nik'=>'required',
          'nama_bapak'=>'required',
          'tempat_lahir'=>'required',
          'tanggal_lahir'=>'required',
          'agama'=>'required',
          'alamat'=>'required',
          'phone'=>'required',
          'pekerjaan'=>'required',
      ]);

      $data['users'] = $id;
      $data['nik'] = $request->nik;
      $data['nama_bapak'] = $request->nama_bapak;
      $data['tempat_lahir'] = $request->tempat_lahir;
      $data['tanggal_lahir'] = $request->tanggal_lahir;
      $data['agama'] = $request->agama;
      $data['alamat'] = $request->alamat;
      $data['phone'] = $request->phone;
      $data['pekerjaan'] = $request->pekerjaan;
      $data['created_at'] = date('Y-m-d H:i:s');
      $data['updated_at'] = date('Y-m-d H:i:s');

      BiodataBapak::insert($data);

      return redirect()->back()->with('success','Sukses Ditambahkan');
    }

    public function updateBapak(Request $request,$id){
      $this->validate($request,[
          'nik'=>'required',
          'nama_bapak'=>'required',
          'tempat_lahir'=>'required',
          'tanggal_lahir'=>'required',
          'agama'=>'required',
          'alamat'=>'required',
          'phone'=>'required',
          'pekerjaan'=>'required',
      ]);

      // $data['users'] = $id;
      $data['nik'] = $request->nik;
      $data['nama_bapak'] = $request->nama_bapak;
      $data['tempat_lahir'] = $request->tempat_lahir;
      $data['tanggal_lahir'] = $request->tanggal_lahir;
      $data['agama'] = $request->agama;
      $data['alamat'] = $request->alamat;
      $data['phone'] = $request->phone;
      $data['pekerjaan'] = $request->pekerjaan;
      // $data['created_at'] = date('Y-m-d H:i:s');
      $data['updated_at'] = date('Y-m-d H:i:s');

      BiodataBapak::where('users', $id)->update($data);

      return redirect()->back()->with('success','Sukses Diupdate');
    }

    public function storeIbu(Request $request,$id){
      $this->validate($request,[
          'nik'=>'required',
          'nama_ibu'=>'required',
          'tempat_lahir'=>'required',
          'tanggal_lahir'=>'required',
          'agama'=>'required',
          'alamat'=>'required',
          'phone'=>'required',
          'pekerjaan'=>'required',
      ]);

      $data['users'] = $id;
      $data['nik'] = $request->nik;
      $data['nama_ibu'] = $request->nama_ibu;
      $data['tempat_lahir'] = $request->tempat_lahir;
      $data['tanggal_lahir'] = $request->tanggal_lahir;
      $data['agama'] = $request->agama;
      $data['alamat'] = $request->alamat;
      $data['phone'] = $request->phone;
      $data['pekerjaan'] = $request->pekerjaan;
      $data['created_at'] = date('Y-m-d H:i:s');
      $data['updated_at'] = date('Y-m-d H:i:s');

      BiodataIbu::insert($data);

      return redirect()->back()->with('success','Sukses Ditambahkan');
    }

    public function updateIbu(Request $request,$id){
      $this->validate($request,[
          'nik'=>'required',
          'nama_ibu'=>'required',
          'tempat_lahir'=>'required',
          'tanggal_lahir'=>'required',
          'agama'=>'required',
          'alamat'=>'required',
          'phone'=>'required',
          'pekerjaan'=>'required',
      ]);

      // $data['users'] = $id;
      $data['nik'] = $request->nik;
      $data['nama_ibu'] = $request->nama_ibu;
      $data['tempat_lahir'] = $request->tempat_lahir;
      $data['tanggal_lahir'] = $request->tanggal_lahir;
      $data['agama'] = $request->agama;
      $data['alamat'] = $request->alamat;
      $data['phone'] = $request->phone;
      $data['pekerjaan'] = $request->pekerjaan;
      // $data['created_at'] = date('Y-m-d H:i:s');
      $data['updated_at'] = date('Y-m-d H:i:s');

      BiodataIbu::where('users', $id)->update($data);

      return redirect()->back()->with('success','Sukses Diupdate');
    }
}
