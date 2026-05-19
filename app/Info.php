<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = ['user_id', 'info', 'judul', 'gambar', 'status', 'slug', 'tgl_buat', 'tgl_ubah'];
    public $timestamps=false;
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
