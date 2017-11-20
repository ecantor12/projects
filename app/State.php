<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
	protected $table = 'states';

    protected $filliable = [
    	'name', 'description', 'object_id', 'object_type'
    ];
}
