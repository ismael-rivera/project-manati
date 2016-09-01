<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topnav extends MY_Global {

	function __construct(){
		parent::__construct();
		
	}
	
	function index(){
		
		$this->loadpageviews('home');
		
	}
	
	
	
}

/* End of file $page.php */
/* Location: ./application/controllers/$page.php */