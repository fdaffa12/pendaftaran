<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Nilai;

class NilaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $data = Nilai::with('biodata_r')->orderBy('rata_semua','desc')->get();

      return view ('admin.nilai.index', compact('data'));
    }
}
