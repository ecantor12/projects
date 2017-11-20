<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	
    protected $table = 'images';

    protected $filliable = [
    	'file', 'caption', 'description'
    ];

	public function user(){
        $this->belongsTo('App\User');
    }
}
