<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    protected $table = 'finance';
    protected $fillable = ['id','user_id','keperluan','tanggal','keterangan'];
}
