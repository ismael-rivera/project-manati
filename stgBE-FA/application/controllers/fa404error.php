<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class fa404error extends MY_Controller {

	function __construct(){
		parent::__construct();
		
	}
	
	function index(){
		
		$this->output->set_status_header('404'); 
		$this->load->view('errors/html/error_404');//loading in my template
		
	}
	
	
	
}

/* End of file $page.php */
/* Location: ./application/controllers/$page.php */