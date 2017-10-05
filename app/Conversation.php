<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
	public function getMessagesAttribute()
	{
		return Message::where('conversation_id', $this->id)->get();
	}
}
