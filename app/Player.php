<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	protected $fillable = [ 'first_name', 'last_name', 'nickname', 'phone', 'profile_image', 'email', 'uga_email', 'usau_id', 'uga_id', 'active' ];
}
