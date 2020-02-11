<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExerciseRecord extends Model
{
	protected $fillable = [ 'created_at', 'exercise', 'reps', 'weight', 'distance', 'unit', 'notes'];
    protected $connection = 'lifting_db';
	

}
