<?php
class Pages extends Frontend_Controller {
	
	public function __construct()
	{
	 parent::__construct();
	}

	public function home()
	{
	
	$this->load->view('templates/usr/header');
	$this->load->view('frontend/home');
	$this->load->view('templates/usr/footer');
	
	}
	
	public function userAccountProfile(){
	
	$this->load->view('templates/usr/header');
	$this->load->view('frontend/about');
	$this->load->view('templates/usr/footer');	
		
	}
	
	public function browseProjects(){
	
	$this->load->view('templates/usr/header');
	$this->load->view('frontend/about');
	$this->load->view('templates/usr/footer');	
		
	}
	
	public function accountActivity(){
	
	$this->load->view('templates/usr/header');
	$this->load->view('frontend/about');
	$this->load->view('templates/usr/footer');	
		
	}
	
	public function testimonials(){
	
	$this->load->view('templates/usr/header');
	$this->load->view('frontend/about');
	$this->load->view('templates/usr/footer');	
		
	}
	
	function cs(){
	
	$this->load->view('templates/usr/header');
	$this->load->view('frontend/about');
	$this->load->view('templates/usr/footer');	
		
	}
	
}