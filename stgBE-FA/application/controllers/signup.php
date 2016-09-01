<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends MY_Controller {
	
	public $pagebanner = false;
	public $data = array();
	private $_sscucc = false;
	
	
	function __construct(){
		parent::__construct();
		/*$stored_password = '$2y$10$Nrntj74eZcybhd3u7B6lF.U3LCMKT4upWufylzqsWy1UB3ijk';
		$key = 'du_du_chinhi' . 'manumanu';	
		if(password_verify($key, $stored_password)){
			echo "Password Confirmed - Be Well";
		} else {
			echo "Access Denied";	
		}*/
	}
	
	function index(){
		
		$d = validation_errors('<div class="verror">', '</div>,');
		$da = explode(',', $d); 
		$data['validation_errors'] = $da;
		$this->loadpageviews('view_signup', $data);
		
		//echo "<pre>" . var_dump($this) . "</pre>";
	
    }
   
    function process_form_signup(){
		
		$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required|alpha|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required|alpha|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('email', 'Email', 'trim|is_unique[users.email]|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|alpha_numeric|is_unique[users.user_name]|required|xss_clean|min_length[2]|max_length[18]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[24]|matches[passconf]');
        $this->form_validation->set_rules('passconf', 'Passconf', 'trim|required|min_length[8]|max_length[24]');
		
		if ($this->form_validation->run() == FALSE) {
        	//Did not Process: Revert back to Registration Form
			$this->index();
        } else {
			//Load model for inserting users
			$this->load->model("model_signup");
			$result = $this->model_signup->insert_user();
			if($result){
				$succ = true;
				$this->signup_success($succ);
				
			}
			
		}
				          
	}
	
	function error_correct(){
		$d = validation_errors('<div class="verror">', '</div>,');
		$da = explode(',', $d); 
		$data['validation_errors'] = $da;
		$this->loadpageviews('view_signup', $data);
	}
	
	
    function signup_success($suc=false){
		if($suc){
			$this->_ssucc = $suc;
			if($this->_ssucc === true){
			$this->loadpageviews('view_signup_success');
			} else { 
					//error 404 
					redirect('/fa404error');
				   }
		} else {
			//error 404 
			redirect('/fa404error');
			}
	}
	 	
		

}