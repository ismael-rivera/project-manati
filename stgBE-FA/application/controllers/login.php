<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {
	
	private $diagnostics_test = true;

	function __construct(){
		parent::__construct();
		
		/*$password = 'Suckmycock';
		$keypass = 'du_du_chinhi_' . $password;	
		$password_hash  = password_hash($keypass, PASSWORD_BCRYPT);
		
		echo $password_hash . '</br>';
		
		$hash = '$2y$10$R3H7MRNBklrhRQeTjnI.geHGsuhzVm5XK4m5D9CPTHTK9bQNXSTmi';
		
		$password_verify = password_verify($keypass, $hash);
		$result .= var_dump($password_verify). '</br>';*/
		
	}
	
	function index(){
		
		$d = validation_errors('<div class="verror">', '</div>,');
		$da = explode(',', $d); 
		$data['validation_errors'] = $da;
		$this->loadpageviews('view_login', $data);
		
	}
	
	function process_form_login(){
	
	$em_us_input = $this->input->post('email_username');
	
	if(!filter_var($em_us_input, FILTER_VALIDATE_EMAIL)){
		//if not email
		//echo "not an email";
		$this->form_validation->set_rules('email_username', 'Username', 'trim|alpha_numeric|required|xss_clean|min_length[2]|max_length[18]');		
		} else { 
		//if email
		//echo "By God! It's an email!!";
		$this->form_validation->set_rules('email_username', 'Email', 'trim|required|valid_email');		
	}
		
	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[24]');
			
		
	if ($this->form_validation->run() == FALSE) {
        	//Did not Process: Revert back to Registration Form
			$this->index();
			echo("Form Not Valid");
    } else {
			//Load model for inserting users
			$this->load->model("model_login");
			
			if($this->diagnostics_test === true){
			$test = $this->model_login->access_user();
				if($test){echo $test;}					
			} else {				
			$result = $this->model_login->access_user();
				if($result){
					echo $result;
					//$succ = true;
					//$this->login_success($succ);	
				} else {
					$this->index();
					echo('Sorry there seems to be no account matching that Email/Username.');	
				}
			}		
		   }				          
	}
	
	
	
}

/* End of file $page.php */
/* Location: ./application/controllers/$page.php */