<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthenticationAd;
use App\Ad;

class AdController extends Controller
{
	public function index(Request $request) {
		if ($request->f == "free") {
			return view('ad.index')->with('ads', Ad::where('price', 0)->get());
		}
		else if ($request->f == "m") {
			if ($request->o == "asc") {
				return view('ad.index')->with('ads', Ad::orderBy('price', 'asc')->get());
			}
			else {
				return view('ad.index')->with('ads', Ad::orderBy('price', 'desc')->get());
			}
		}
		else {
			if ($request->o == "asc") {
				return view('ad.index')->with('ads', \App\Ad::all());
			}
			else {
				return view('ad.index')->with('ads', \App\Ad::all()->reverse());
			}
		}
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
		$ad->price = floor(floatval($request->price) * 100);
		$ad->user_id = $request->user()->id;

		$ad->save();

		if ($request->hasFile('image') && $request->file('image')->isValid()) {
			$request->file('image')->storeAs('public/ads', $ad->id);
		}

		return redirect()->route('ads.index');
	}
}
