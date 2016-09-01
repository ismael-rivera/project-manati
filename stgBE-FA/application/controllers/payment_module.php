<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PaymentModule extends MY_Controller {

	function __construct(){
		parent::__construct();
		
	}
	
	function index(){
		
		$this->loadpageviews('view_payment_module');
		
	}
	
	
	
}

/* End of file $page.php */
/* Location: ./application/controllers/$page.php */