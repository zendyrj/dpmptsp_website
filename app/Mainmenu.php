<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mainmenu extends Model
{
    	protected $fillable = ['parent', 'nama', 'alamat', 'urutan'];
    	public $timestamps=false;
 
	    public function parent()
	    {
	        return $this->belongsTo('App\Mainmenu', 'parent');
	    }
	 
	    public function children()
	    {
	        return $this->hasMany('App\Mainmenu', 'parent');
	    }
}
