<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthenticationForm;
use App\Http\Requests\AuthenticationForm2;
use App\Http\Requests;
use App\Advertising;
		

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

	public function form2(){
		return view('pages.form2');
	}

	public function post_validate(AuthenticationForm $request){

		$data = $request->all();

		dd($data);

	}

	public function form2_validate(AuthenticationForm2 $request){
		$ad = new Advertising;

		$ad->name = $request->name;
		$ad->description = $request->description;

		$ad->save();

		return redirect('/form2');
	}
}
