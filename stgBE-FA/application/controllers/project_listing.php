<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project_listing extends MY_Controller {

	function __construct(){
		parent::__construct();
		
	}
	
	function index(){
		
		$this->loadpageviews('view_project_listing');
		
	}
	
	
	
}

/* End of file $page.php */
/* Location: ./application/controllers/$page.php */