<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
       //mengambil data dari table user
       $pegawai = DB::table('pegawai')->get();

       //mengirim data user ke viw index
       return view('pegawai.index', ['pegawai' => $pegawai]);
    }
    public function register()
    {
        return view('register');
    }  
    
    //
}
