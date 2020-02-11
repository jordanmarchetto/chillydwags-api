<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttendanceRecord extends Model
{
	 protected $fillable = [ 'recorded_by', 'timestamp', 'notes', 'attendance'];
	 protected $casts = [
		 'attendance' => 'array'
	 ];

}
