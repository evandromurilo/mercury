<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthenticationForm;
use App\Http\Requests;

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

	public function post_validate(AuthenticationForm $request){
		$data = $request->all();

		dd($data);
	}
}
