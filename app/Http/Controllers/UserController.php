<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
	public function show(Request $request) {
		$user = User::find($request->segment(2));

		return view('user.show')->with('user', $user);
	}

	public function edit(Request $request) {
		return view('user.edit');
	}
}
