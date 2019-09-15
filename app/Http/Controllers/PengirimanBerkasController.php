<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class PengirimanBerkasController extends Controller
{
    public function index()
    {
    	return view('bagi.index');
    }
    public function form()
    {
    	$AllRole = \App\User::All();

    	$RoleManager = \App\User::where('role','=','manager')->get();

    	$RoleKaryawan = \App\User::where('role','=','karyawan')->get();

    	$RoleBendahara = \App\User::where('role','=','bendahara')->get();
    	
    	return view('bagi.form', ['RoleBendahara' => $RoleBendahara,'RoleKaryawan' => $RoleKaryawan,'RoleManager' => $RoleManager,'AllRole' => $AllRole]);
    }
    public function sendForm(Request $req)
    {
    		$this->validate($req, [
                'file' => 'required|file|mimes:jpeg,png,jpg,docx,rar,xlsx,pdf|max:10000',  
            ]);

    		$filenya = $req->file('file');
    	
    		$nama_file = time().'_'.$filenya->getClientOriginalName();

    		$tempatfile = ('bagi_berkas');

    		$filenya->move($tempatfile, $nama_file); 
    	foreach ($req->person as $p) {
    	

    		$penerima = \App\User::where('id','=',$p)->first();

    		$pengirim = Auth::user();

    		$send = new \App\SendFile;
    		$send->id = mt_rand(100000,999999);
    		$send->pengirim_id = $pengirim->id;
    		$send->penerima_id = $penerima->id;
    		$send->nama_pengirim = $pengirim->name;
    		$send->isi_pesan = $req->nama_file;
    		$send->alias = $req->alias;
    		$send->keterangan = $req->keterangan;
    		$send->lampiran = $nama_file;

    		$send->save();
    	}
    	return redirect()->back()->with('sukses','Berhasil bagi berkas');
    }
    public function BerkasTerkirim()
    {
    	$thisID = Auth::user();

    	$send = \App\SendFile::where('pengirim_id','=',$thisID->id)->get();

    	return view('bagi.terkirim',['send' => $send]);
    }
    public function BerkasMasuk()
    {
    	$thisID = Auth::user();
    
    	$send = \App\SendFile::where('penerima_id','=',$thisID->id)->get();

    	return view('bagi.masuk',['send' => $send]);
    }
}
