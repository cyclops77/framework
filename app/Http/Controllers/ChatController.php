<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
class ChatController extends Controller
   {
    public function index()
    {
    	$userser = Auth::user();

    	$chatThumbnail = \App\Chat::where('penerima_id','=',$userser->id)
    		
    		->orderByDesc('created_at')
    		->get();
    	
    	$chatMasuk = \App\Chat::where('penerima_id','=',$userser->id)->get();
    	
    	return view('chat.index',['chatMasuk' => $chatMasuk, 'chatThumbnail' => $chatThumbnail]);
    	
    }
    public function lihatPesan($id)
    {
    	$userser = Auth::user();

    	$chatThumbnail = \App\Chat::where('penerima_id','=',$userser->id)
    		
    		->orderByDesc('created_at')
    		->get();
    	
    	$chatMasuk = \App\Chat::where('penerima_id','=',$userser->id)
    		->where('pengirim_id','=',$id)
    		->get();
    	
    	return view('chat.inbox',['chatMasuk' => $chatMasuk, 'chatThumbnail' => $chatThumbnail, 'id' => $id]);
    	
    }
    public function kirimPesan(Request $request)
    {
    	
    	$userser = Auth::user();
		
    	$chatSatu = new \App\Chat;
    	$chatSatu->id = mt_rand(1000,1999);
    	$chatSatu->pengirim_id = $request->idTujuan;
    	$chatSatu->penerima_id = $userser->id;
    	$chatSatu->isi_pesan = '<div class="outgoing_msg">
              <div class="sent_msg">
                <p>'.$request->isinya.'</p>
                <span class="time_date"> 11:01 AM    |    June 9</span> </div>
            </div>';
        $chatSatu->thumbnail_chat = $request->isinya;
        $chatSatu->save();
    
        $chatDua = new \App\Chat;
    	$chatDua->id = mt_rand(1000,1999);
    	$chatDua->pengirim_id = $userser->id;
    	$chatDua->penerima_id = $request->idTujuan;
    	$chatDua->isi_pesan = '<div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>'.$request->isinya.'</p>
                  <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
              </div>
            </div>';
        $chatDua->thumbnail_chat = $request->isinya;
        $chatDua->save();

        return redirect()->back();
    }
}
