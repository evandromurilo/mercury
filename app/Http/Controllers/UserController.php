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

	public function update(\App\Http\Requests\AuthenticationUser $request) {
		$user = Auth::user();

		$user->full_name = $request->full_name;
		$user->description = $request->description;
		$user->age = $request->age;
		$user->address = $request->address;
		$user->phone = $request->phone;
		$user->cell_phone = $request->cell_phone;
		$user->email = $request->email;

		$user->save();

		return redirect()->route('users.show', $user->id);
	}
}
