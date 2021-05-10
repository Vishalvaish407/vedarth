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
		return view('detailpage',["courseData"=>$data,'success'=>null]);
	}

	public function courseregister(){
      
		$name = $this->request->getPost('name');
		$email = $this->request->getPost('email');
		$phone = $this->request->getPost('phone');
		$courseId = $this->request->getPost('course');
        
		$coursesModel = new \App\Models\CoursesModel();
		$coursedata = $coursesModel->find($courseId);
        
		

		$emailService = service('email');
		$emailService->setTo($email);
		$emailService->setSubject('Vedarth Course Registration');

		$emailPage = view('emails/courseRegister', ['name'=>$name, 'courseDetails'=>$coursedata]);
		$emailService->setMessage($emailPage);
        
		if($emailService->send()){
		    $success = true;
			$adminMail = $this->sendemailtoadmin($name,$email,$phone,$courseId);

			return view('detailpage',["courseData"=>$coursedata, 'success'=>$success]);
		} else{
			$success = false;
			return view('detailpage',["courseData"=>$coursedata, 'success'=>$success]);
		
		}
		
	}
	public function contactdetail(){
		$name = $this->request->getPost('name');
		$email = $this->request->getPost('email');
		$phone = $this->request->getPost('phone');
		$courseId = $this->request->getPost('course');
        
		$coursesModel = new \App\Models\CoursesModel();
		$coursedata = $coursesModel->find($courseId);
        

		$emailService = service('email');
		$emailService->setTo($email);
		$emailService->setSubject('Vedarth Course contact');

		$emailPage = view('emails/contactdetail', ['name'=>$name, 'courseDetails'=>$coursedata]);
		$emailService->setMessage($emailPage);
        
		
		if($emailService->send()){
		    $success = true;
			$adminMail = $this->sendemailtoadmin($name,$email,$phone,$courseId);
            
			return view('detailpage',["courseData"=>$coursedata, 'success'=>$success,'adminMail'=>$adminMail]);
		}
		 else{
			$success = false;
			//return $this->redirect(site_url('/Home/detailPage/'.$courseId.''));
			return view('detailpage',["courseData"=>$coursedata, 'success'=>$success,'adminMail'=>$adminMail]);
		
		}
		
	}

	public function sendemailtoadmin($name,$email,$phone,$courseId){
		

		$coursesModel = new \App\Models\CoursesModel();
		$coursedata = $coursesModel->find($courseId);

		$emailService = service('email');
		$emailService->setTo('tyagi.krish277@gmail.com');
		$emailService->setSubject('Vedarth Course New Query');

		$emailPage = view ("emails/sendemailtoadmin",['name'=>$name,'email'=>$email,'phone'=>$phone, 'courseDetails'=>$coursedata]);
		$emailService->setMessage($emailPage);

		if($emailService->send()){
			return true;
			
		}else{
			return false;
			
		}
		

	}
	
}
