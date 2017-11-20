<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $filliable = [
    	'name', 'description', 'alias', 'initial_date', 'final_date', 'progress', 'duration', 'duration_type', 'task_id'
    ];

	public function tasks(){
        $this->hasMany('App\Task');
    }
	
	public function users(){
        $this->belongsToMany('App\User')->withTimestamps();
    }
}
