<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //Tag functionality
    public function posts()
    {
    	return $this->belongsToMany('App\Post');
    }
}