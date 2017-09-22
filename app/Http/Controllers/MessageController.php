<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ad;
use App\Message;
use App\User;
use App\Notifications\NewMessage;

class MessageController extends Controller
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

		return view('message.create')->with(['title' => $title, 'to_email' => $to_email]);
	}

	public function store(Request $request) {
		$message = new Message;

		$message->title = $request->title;
		$message->body = $request->body;
		$message->to_id = User::where('email', $request->to_email)->first()->id;
		$message->from_id = Auth::id();

		$message->save();
		User::find($message->to_id)->notify(new NewMessage($message));

		//return redirect()->route('messages.show', $message->id);
		return redirect()->route('home');
	}

	public function index() {
		$messages = Message::where('to_id', Auth::id())->get();
		Auth::user()->unreadNotifications()->update(['read_at' => \Carbon\Carbon::now()]);

		return view('message.index')->with('msgs', $messages);
	}

	public function show(Request $request) {
		$message = Message::find($request->segment(2));

		if (Auth::id() == $message->to_id) {
			if (!$message->seen) {
				$message->seen = true;
				$message->save();
			}

			return view('message.show')->with('msg', $message);
		}
		else {
			return redirect()->route('messages.index');
		}
	}

	public function destroy(Request $request) {
		$id = $request->segment(2);

		if (Message::find($id)->to_id == Auth::id()) {
			Message::destroy($id);
		}

		return redirect()->route('messages.index');
	}
}
