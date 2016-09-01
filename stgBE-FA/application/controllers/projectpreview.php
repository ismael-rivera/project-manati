<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projectpreview extends MY_Controller {
	
	public $pagebanner = false;
	
	
	function __construct(){
		parent::__construct();
		
	}
	
	function index(){
		
		$this->loadpageviews('view_project_preview');
		
		//echo "<pre>" . var_dump($this) . "</pre>";
	
    }
		

}