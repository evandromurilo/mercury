<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthenticationAd;
use App\Ad;

class AdController extends Controller
{
	public function index() {
		return view('ad.index')->with('ads', \App\Ad::all()->reverse());
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

		echo 'wtf';
		if ($request->hasFile('image') && $request->file('image')->isValid()) {
			$request->file('image')->storeAs('public/ads', $ad->id);
		}

		return redirect()->route('ads.index');
	}
}
