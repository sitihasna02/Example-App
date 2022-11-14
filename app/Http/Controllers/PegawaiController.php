<?php

namespace App\Http\Controllers;

use App\Models\PegawaiModel;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = PegawaiModel::all();
        return view('Pegawai.index')->with('pegawai', $pegawai);
    }
    public function create()
    {
        return view('Pegawai.create');
    }

    public function store(Request $request)
    {
        PegawaiModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);
        return redirect(route('pegawai.index'));
    }


    public function edit($id)
    {
        $pegawai = PegawaiModel::whereId($id)->first();
        return view('Pegawai.edit')->with('pegawai', $pegawai);
    }



    public function update($id, Request $request)
    {

        PegawaiModel::whereId($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);

        return redirect(route('pegawai.index'));
    }
    
    public function delete($id)
    {
        PegawaiModel::whereId($id)->delete();
        return redirect()->back();
    }
}