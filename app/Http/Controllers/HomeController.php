<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BiodataSiswa;
use App\User;
use App\Nilai;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = \Auth::user()->id;

        $cek = BiodataSiswa::where('users',$user_id)->count();
        if($cek < 1){
            $pesan = 'Harap Melengkapi Biodata Terlebih Dahulu';
        }else{
            $pesan = 'Biodata Anda Sudah Dilengkapi.. Terima Kasih';
        }

        $cek_nilai = Nilai::where('users',$user_id)->count();

        $cek_verivikasi = User::find($user_id);

        if($cek_verivikasi->is_verifikasi == 1){
          $status = 'Sudah diverifikasi';
        }else {
          $status = 'Belum diverifikasi';
        }

        $cek_lulus = User::find($user_id);
        if($cek_lulus->is_lulus == 1){
            $pesan_lulus = 'Selamat Anda Sudah lulus';
        }else{
            $pesan_lulus = 'Mohon Maaf status anda masih dalam peninjauan';
        }

        return view('beranda.index',compact('pesan','cek','status','pesan_lulus', 'cek_nilai'));
    }

    public function handleAdmin()
    {
        return view('admin.index');
    }
}
