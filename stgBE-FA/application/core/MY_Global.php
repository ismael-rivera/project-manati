<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MY_Global extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	}
	
	public $is_home;
	public $linkdata = array();
	
	public function is_active($page){
	
		if($this->router->fetch_class() == $page){
		  $this->active_link = sprintf('class="active"');
		  	
		}
	}
	
	
	private function is_Home(){
		$this->router->fetch_class() === 'home' ? $this->is_home = true : $this->is_home = false;
		$this->is_home = true;	
		/*if(current_url() == site_url() || current_url() == site_url() . 'home'){
			//current button is set to active
			return true;
		} 
		if ($x !== 'home'){			
			return false;
			}*/
	}
}