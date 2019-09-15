<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SendFile extends Model
{
    protected $table = 'send_file';
    protected $fillable = ['id','pengirim_id','penerima_id','nama_pengirim','isi_pesan','alias','keterangan','lampiran'];
}
