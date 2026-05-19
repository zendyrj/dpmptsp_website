<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    protected $fillable = ['nama', 'alamat', 'telepon'];
    public $timestamps=false;
}
