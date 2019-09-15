<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class KeuanganController extends Controller
{
    public function index()
    {
        $userIdLogIn = auth()->user()->id; 
        $fin = \App\Finance::where('user_id','=',$userIdLogIn)->get();
    	return view('keuangan.index', ['fin' => $fin]);
    }
    public function form()
    {
    	return view('keuangan.form');
    }
    public function storeForm(Request $request)
    {

        $tgl = date('Y-m-d', strtotime(str_replace("/","-",$request->tanggal)));
        $idUser = auth()->user()->id;

        $fin = new \App\Finance;
        $fin->id = mt_rand(1000,1999);
        $fin->user_id = $idUser;
        $fin->keperluan = $request->keperluan;
        $fin->tanggal = $tgl;
        $fin->keterangan = $request->keterangan;
        $fin->save();

    	return redirect()->back()->with('sukses','menambah Data Keuangan');
        // dd($tgl);
    }
}
