<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{   $coursesModel = new \App\Models\CoursesModel();
		$data = $coursesModel->findAll();
		return view('index', ["coursesData"=>$data]);
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
		$coursesModel = new \App\Models\CoursesModel();
		$data = $coursesModel->findAll();
		return view('trainingprograms', ["coursesData"=>$data]);
	} 

	public function detailPage($id){
		$coursesModel = new \App\Models\CoursesModel();
		$data = $coursesModel->find($id);
		return view('detailpage',["courseData"=>$data]);
	}
	
}
