<?php
class About extends MY_Controller {
	
	public function __construct()
	{
	 parent::__construct();
	}

	public function pages($page = 'home')
	{	
     if ( ! file_exists('../app_meat/views/frontend/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}
	
	$data['title'] = ucfirst($page); // Capitalize the first letter
	
	$this->load->view('templates/fe/header', $data);
	$this->load->view('frontend/'.$page, $data);
	$this->load->view('templates/fe/footer', $data);
	
	//$this->load->view('welcome_message');
	
	
	}
	
}