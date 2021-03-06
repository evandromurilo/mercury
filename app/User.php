<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	public function getGravatarAttribute()
	{
		$hash = md5(strtolower(trim($this->attributes['email'])));

		return "http://www.gravatar.com/avatar/$hash";
	}

	public function getAdsAttribute()
	{
		return Ad::where('user_id', $this->id)->get()->reverse();
	}

	public function getConversationsAttribute()
	{
		return Conversation::where(
			[['visible', '=', true],
			['to_id', '=', $this->id]])->orWhere(
				[['visible', '=', true],
				['from_id', '=', $this->id]])->get();
	}
}
