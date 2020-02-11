<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
	protected $fillable = [ 'name', 'rest_time', 'notes', 'active', 'tags', 'type'];
    protected $connection = 'lifting_db';
	
    
}
