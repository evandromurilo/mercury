<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
	public function home()
	{
		return view('pages.home');
	}

	public function contact()
	{
		return view('pages.contact');
	}

	public function about()
	{
		return view('pages.about');
	}

	public function form(){
		return view('pages.form');
	}
}
