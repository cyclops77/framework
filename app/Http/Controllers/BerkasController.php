<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use \App\File;

class BerkasController extends Controller
{
    public function index()
    {
    	return view('berkas.form');
    }
    public function arsipBerkas()
    {

    	return view('berkas.arsip-berkas');
    }
    public function BerkasSaya($value='')
    {
    	$user = Auth::user();

    	$files = \App\File::where('user_id','=',$user->id)->get();
    	
    	return view('berkas.berkas-saya', ['files' => $files]);
    }
    public function storeBerkas(Request $request)
    {

    	$this->validate($request, [
                'file' => 'required|file|mimes:jpeg,png,jpg,docx,rar,xlsx,pdf|max:10000',  
            ]);

    	$user = Auth::user();

    	$filenya = $request->file('file');
    	
    	$nama_file = time().'_'.$filenya->getClientOriginalName();

    	$tempatfile = ('file_berkas');

    	$filenya->move($tempatfile, $nama_file); 

    	File::create([
    		'id' => mt_rand(1000,9999),
    		'user_id' => $user->id,
    		'nama_file' => $request->nama_file,
    		'alias' => $request->alias,
    		'keterangan' => $request->keterangan,
    		'lampiran' => $nama_file,
    	]);

    	// dd($nama_file);
    	 return redirect()->back()->with('sukses','berhasil menyimpan data anda');
    }
}
