<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'file';
    protected $fillable = ['id','user_id','nama_file','alias','keterangan','lampiran'];
}
