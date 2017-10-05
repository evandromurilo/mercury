<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ad;
use App\Message;
use App\User;
use App\Conversation;
use App\Notifications\NewMessage;

class ConversationController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}

	public function create(Request $request) {
		$title = '';
		$to_email = '';

		if ($request->has('ad')) {
			$ad = Ad::find($request->ad);
			$title = $ad->title;
			$to_email = $ad->creator->email;
		} else if ($request->has('msg')) {
			$msg = Message::find($request->msg);

			if ($msg->to_id == Auth::id()) {
				$title = $msg->title;
				$to_email = $msg->author->email;
			}
		} else if ($request->has('user')) {
			$to_email = User::find($request->user)->email;
		}

		return view('conversation.create')->with(['title' => $title, 'to_email' => $to_email]);
	}

	public function store(Request $request) {
		$conversation = new Conversation;
		$message = new Message;

		$conversation->title = $request->title;
		$conversation->to_id = User::where('email', $request->to_email)->first()->id;
		$conversation->from_id = Auth::id();
		$conversation->save();

		$message->to_id = $conversation->to_id;
		$message->from_id = $conversation->from_id;
		$message->body = $request->body;
		$message->conversation_id = $conversation->id;
		$message->save();

		User::find($conversation->to_id)->notify(new NewMessage($message));

		//return redirect()->route('messages.show', $message->id);
		return redirect()->route('home');
	}

	public function index() {
		$conversations = Auth::user()->conversations;
		Auth::user()->unreadNotifications()->update(['read_at' => \Carbon\Carbon::now()]);

		return view('conversation.index')->with('convs', $conversations);
	}

	public function show(Request $request) {
		$conversation = Conversation::find($request->segment(2));

		if (!$conversation->visible) {
			return redirect()->route('conversations.index');
		}


		if (Auth::id() == $conversation->to_id || Auth::id() == $conversation->from_id) {
			return view('conversation.show')->with('conv', $conversation);
		}
		else {
			return redirect()->route('conversations.index');
		}
	}

	public function destroy(Request $request) {
		$id = $request->segment(2);
		$conversation = Conversation::find($id);

		if ($conversation->to_id == Auth::id()) {
			$conversation->visible = false;
			$conversation->save();
		}

		return redirect()->route('conversations.index');
	}
}
