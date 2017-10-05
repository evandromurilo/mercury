<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ad;
use App\Message;
use App\Conversation;
use App\User;
use App\Notifications\NewMessage;

class MessageController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}

	public function store(Request $request) {
		$message = new Message;
		$conversation = Conversation::find($request->conversation_id);

		if (Auth::id() == $conversation->from_id) {
						$to_id = $conversation->to_id;
		} else {
						$to_id = $conversation->from_id;
		}

		$message->body = $request->body;
		$message->to_id = $to_id;
		$message->from_id = Auth::id();
		$message->conversation_id = $request->conversation_id;

		$message->save();
		User::find($message->to_id)->notify(new NewMessage($message));

		//return redirect()->route('messages.show', $message->id);
		return redirect()->route('conversations.show', $request->conversation_id);
	}

	public function destroy(Request $request) {
		$id = $request->segment(2);

		if (Message::find($id)->to_id == Auth::id()) {
			Message::destroy($id);
		}

		return redirect()->route('messages.index');
	}
}
