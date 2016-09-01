<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifylogininfo extends MY_Controller {

	function __construct(){
		parent::__construct();
		
	}
	
	function index(){
		//if verified
		$this->loadpageviews('userportal');
		//else
		//$this->loadpageviews('login');
	}
	
	
	
}

/* End of file $page.php */
/* Location: ./application/controllers/$page.php */