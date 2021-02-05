<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BiodataSiswa;
Use Carbon\Carbon;

class BiodataSiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function siswa(){
        $dt = BiodataSiswa::where('users',\Auth::user()->id)->first();
        $cek = BiodataSiswa::where('users',\Auth::user()->id)->count();
        return view('biodata.siswa', compact('dt','cek'));
    }

    public function storeSiswa(Request $request, $id){
        $this->validate($request,[
            'nik'=>'required',
            'nama'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'agama'=>'required',
            'alamat'=>'required',
            'asal_sekolah'=>'required',
            'nisn'=>'required',
        ]);

        $data['users'] = $id;
        $data['nik'] = $request->nik;
        $data['nama'] = $request->nama;
        $data['tempat_lahir'] = $request->tempat_lahir;
        $data['tanggal_lahir'] = $request->tanggal_lahir;
        $data['agama'] = $request->agama;
        $data['alamat'] = $request->alamat;
        $data['asal_sekolah'] = $request->asal_sekolah;
        $data['nisn'] = $request->nisn;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        BiodataSiswa::insert($data);

        return redirect()->back()->with('success','Sukses Ditambahkan');
    }

    public function updateSiswa(Request $request, $id){

        $this->validate($request,[
            'nik'=>'required',
            'nama'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'agama'=>'required',
            'alamat'=>'required',
            'asal_sekolah'=>'required',
            'nisn'=>'required',
        ]);

        // $data['users'] = $id;
        $data['nik'] = $request->nik;
        $data['nama'] = $request->nama;
        $data['tempat_lahir'] = $request->tempat_lahir;
        $data['tanggal_lahir'] = $request->tanggal_lahir;
        $data['agama'] = $request->agama;
        $data['alamat'] = $request->alamat;
        $data['asal_sekolah'] = $request->asal_sekolah;
        $data['nisn'] = $request->nisn;
        // $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        BiodataSiswa::where('users', $id)->update($data);

        // \Session::flash('sukses','Data berhasil diupdate');

        return redirect()->back()->with('success', 'Suskses Diupdate');
    }


}
