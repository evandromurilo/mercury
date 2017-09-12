<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
	public function getCreatorAttribute()
	{
		return User::find($this->user_id);
	}
}
