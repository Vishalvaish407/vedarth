<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}

	public function contactus(){
		return view('contactus');
	} 

	public function about(){
		return view('about');
	} 

	public function news(){
		return view('news');
	} 

	public function images(){
		return view('images');
	} 

	
}
