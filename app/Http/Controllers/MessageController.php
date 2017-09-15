<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message;
use App\User;

class MessageController extends Controller
{
	public function create() {
		if (Auth::check()) {
			return view('message.create');
		} else {
			return redirect()->route('home');
		}
	}

	public function store(Request $request) {
		$message = new Message;

		$message->title = $request->title;
		$message->body = $request->body;
		$message->to_id = User::where('email', $request->to_email)->first()->id;
		$message->from_id = Auth::id();

		$message->save();

		//return redirect()->route('messages.show', $message->id);
		return redirect()->route('home');
	}

	public function index() {
		if (Auth::guest()) {
			return redirect()->route('login');
		}
		else {
			$messages = Message::where('to_id', Auth::id())->get();

			return view('message.index')->with('msgs', $messages);
		}
	}

	public function show(Request $request) {
		$message = Message::find($request->segment(2));

		if (Auth::id() == $message->to_id) {
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
