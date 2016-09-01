<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EmailSent extends MY_Controller {

	function __construct(){
		parent::__construct();
		
	}
	
	function index(){
		$this->pagebanner = false;
		$this->loadpageviews('emailsent');
		
	}
	
	
	
}

/* End of file $page.php */
/* Location: ./application/controllers/$page.php */