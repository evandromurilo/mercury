<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthenticationAd;
use App\Ad;

class AdController extends Controller
{
	public function __construct() {
		$this->middleware('auth')->except(['show', 'index']);
	}

	public function index(Request $request) {
		if ($request->f == "free") {
			return view('ad.index')->with(['ads' => Ad::where('price', 0)->get(), 'filter' => 'free']);
		}
		else if ($request->f == "m") {
			if ($request->o == "asc") {
				return view('ad.index')->with(['ads' => Ad::orderBy('price', 'asc')->get(), 'filter' => 'cheap']);
			}
			else {
				return view('ad.index')->with(['ads' => Ad::orderBy('price', 'desc')->get(), 'filter' => 'expensive']);
			}
		}
		else {
			if ($request->o == "asc") {
				return view('ad.index')->with(['ads' => Ad::all(), 'filter' => 'old']);
			}
			else {
				return view('ad.index')->with(['ads' => Ad::all()->reverse(), 'filter' => 'new']);
			}
		}
	}

	public function create() {
		return view('ad.create');
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

	public function edit(Request $request) {
		$id = $request->segment(2);
		if (Auth::id() == Ad::find($id)->user_id) {
			return view('ad.edit')->with('ad', Ad::find($id));
		}
		else {
			return redirect()->route('ads.show', $id);
		}
	}

	public function update(AuthenticationAd $request) {
		$ad = Ad::find($request->segment(2));

		$ad->title = $request->title;
		$ad->description = $request->description;
		$ad->contact = $request->contact;
		$ad->price = floor(floatval($request->price) * 100);

		$ad->save();

		if ($request->hasFile('image') && $request->file('image')->isValid()) {
			$request->file('image')->storeAs('public/ads', $ad->id);
		}

		return redirect()->route('ads.show', $ad->id);
	}

	public function show(Request $request) {
		return view('ad.show')->with('ad', Ad::find($request->segment(2)));
	}

	public function destroy(Request $request) {
		$id = $request->segment(2);

		if (Ad::find($id)->user_id == Auth::id()) {
			Ad::destroy($id);
		}

		return redirect()->route('ads.index');
	}
}
