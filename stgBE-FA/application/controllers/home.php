<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct(){
		parent::__construct();
		
	}
	
	function index(){
		
		$this->loadpageviews('view_home');
		
	}
	
	
	
}

/* End of file $page.php */
/* Location: ./application/controllers/$page.php */