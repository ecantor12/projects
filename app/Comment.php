<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $table = 'comments';

    protected $filliable = [
    	'title', 'comment', 'tags', 'user_id', 'object_id', 'object_type', 'comment_id'
    ];

	public function comments(){
		$this->hasMany('App\Comment');
    }

    public function user(){
    	$this->belongsTo('App\User');
    }

}
