<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $filliable = [
    	'name', 'description', 'alias', 'initial_date', 'final_date', 'user_id'
    ];

    public function user(){
    	$this->belongsTo('App\User');
    }
}
