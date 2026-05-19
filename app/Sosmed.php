<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sosmed extends Model
{
    protected $fillable = ['nama','link','embed'];
    public $timestamps=false;
}
