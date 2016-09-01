<?php
class Pages extends Frontend_Controller {
	
	public function __construct()
	{
	 parent::__construct();
	}
    
	
	
	public function home()
	{
	$this->load->model('latest_project');
	$data['lp'] = $this->latest_project->LatestProjectsReadout();
	
	
	 
	
	$this->load->view('templates/header.php');
	$this->load->view('frontend/home.php', $data);
	$this->load->view('templates/footer.php');
	
	}
	
	public function projects(){
	
	$this->load->view('templates/header');
	$this->load->view('frontend/projects');
	$this->load->view('templates//footer');	
		
	}
	
	public function about(){
	
	$this->load->view('templates/home/header');
	$this->load->view('frontend/about');
	$this->load->view('templates//footer');	
		
	}
	
	public function browse(){
	
	$this->load->view('templates/frontend/header');
	$this->load->view('frontend/about');
	$this->load->view('templates/fe/footer');	
		
	}
	
	public function faq(){
	
	$this->load->view('templates/frontend/header');
	$this->load->view('frontend/about');
	$this->load->view('templates/fe/footer');	
		
	}
	
	public function testimonials(){
	
	$this->load->view('templates/fe/header');
	$this->load->view('frontend/about');
	$this->load->view('templates/fe/footer');	
		
	}
	
	function cs(){
	
	$this->load->view('templates/fe/header');
	$this->load->view('frontend/about');
	$this->load->view('templates/fe/footer');	
		
	}
	
}