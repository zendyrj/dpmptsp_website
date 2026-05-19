<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $fillable = ['nama', 'telp', 'subject', 'laporan','id_parent','status_balas'];
    
}
