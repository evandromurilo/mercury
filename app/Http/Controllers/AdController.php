<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthenticationAd;
use App\Ad;

class AdController extends Controller
{
	public function index() {
		return view('ad.index')->with('ads', \App\Ad::all());
	}

	public function create() {
		if (Auth::check()) {
			return view('ad.create');
		} else {
			return redirect()->route('home');
		}
	}

	public function store(AuthenticationAd $request) {
		$ad = new Ad;

		$ad->title = $request->title;
		$ad->description = $request->description;
		$ad->contact = $request->contact;
		$ad->user_id = $request->user()->id;

		$ad->save();

		return redirect()->route('ad.index');
	}
}
