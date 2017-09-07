<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdsController extends Controller
{
	public function create() {
		return view('ads.create');
	}
}
