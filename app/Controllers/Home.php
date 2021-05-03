<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}

	public function contact(){
		return view('contact');
	} 

	public function about(){
		return view('about');
	} 

	public function gallery(){
		return view('gallery');
	}
	
	public function trainingprograms(){
		return view('trainingprograms');
	} 

	
	
}
