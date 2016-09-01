<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Userprofile extends MY_Controller {

	function __construct(){
		parent::__construct();
		
	}
	
	function index(){
		
		$this->loadpageviews('user/userprofile');
		
	}
	
	
	
}

/* End of file $page.php */
/* Location: ./application/controllers/$page.php */