<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MY_Controller extends CI_Controller {
	
	public $is_home;
	public $pagebanner = true;
	public $linkdata = array();
	public $data = array(); 
	
	
	function __construct(){
		parent::__construct();	
	}
	
	
	public function passMyGlobalData(){
		$data = array();
		$data['test_this'] = $this->router->fetch_class();
		return $data;
	}	
	
	
    public function loadpageviews( $pagetoload, $cdata=NULL ){
		
		if ( ! file_exists(APPPATH.'/views/'.$pagetoload.'.php'))
		{
		// Whoops, we don't have a page for that!
		show_404();
		}
		
		
		$this->load->view('global/view_html_header', $cdata);
		$this->load->view('global/view_session');
		$this->load->view('global/view_header');
		$this->passMyGlobalData();
		$this->load->view('global/view_top_nav');
		//$this->loadmenu();
		$this->is_Home();
	    if(current_url() !== base_url()){
		  if($this->pagebanner === true){	
			$this->load->view('view_page_banner');
		  }
		} else {	
			$this->load->view('view_jumbotron');	
		}
		$this->load->view( $pagetoload );
		$this->load->view('global/view_footer');
		$this->load->view('global/view_sub_footer');
		$this->load->view('global/view_html_footer');
		
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