<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Model_login extends MY_Model {
    
	public function __construct()
	{
	 	parent::__construct(); 
	}
	
	public function access_user(){
	
		$email_username = $this->input->post('email_username');	
		$password  = $this->input->post('password');
		
		$keypass = 'du_du_chinhi_' . $password;	
		
		
				
		//--------------------------------------------------------------------------
		
		if(!filter_var($email_username, FILTER_VALIDATE_EMAIL)){
		//if not email
		
		$test = 'Not an email </br>';
		$sql = "SELECT password FROM users WHERE user_name = ?";
		$sqlexe = $this->db->query($sql, array($email_username));
		
		} else {
		//if email
		
		$test = 'This is an email </br>';	
		$sql = "SELECT password FROM users WHERE email = ?";
		$sqlexe = $this->db->query($sql, array($email_username));
		
		}
		
		foreach ($sqlexe->result() as $row)
		   {
			 $getpassfrmdb = $row->password;
		   }
		
		if($this->db->affected_rows() === 1){
		//Hit. Now we check to see if the password matches.
		  $password_verify = password_verify($keypass, $getpassfrmdb);
		  $test .= $keypass;
		  $test .= var_dump($password_verify). '</br>';
		  $test .= $getpassfrmdb. '</br>';
		  $mhash = '$2y$10$oR/zLfuuCwLLMLX4a6HDYunvhVg6GesBYbGt34yB.8zjSIuMmTVn2';
		  if (password_verify($keypass, $getpassfrmdb)) {
    			$test .= 'Password is valid!'. '</br>';
		  } else {
    			$test .= 'Invalid password.'. '</br>';
		  }
		  
		  $test .= 'Number of affected rows:' . $this->db->affected_rows() .'</br>';			
		  $test .= "Successful Login.</br>";
			 
		}
		if($this->db->affected_rows() > 1){
		//Multiple Hits. Error:This should not happen.
		 	
		  /*There seems to be more than one hit. This should not happen at all, but,
		    just in case it does, have a contingency. */
		  $test .= 'Number of affected rows:' . $this->db->affected_rows() .'</br>';
		  $test .= 'We apologize but there seems to be a problem with your account. Please contact tech support so
		  we can look into this issue and correct it.';	
			
		}
		if($this->db->affected_rows() === 0){
		//miss
		  $test .= 'Number of affected rows:' . $this->db->affected_rows() .'</br>';
		  $test .= 'There are no matches to any accounts relating this Email or Username </br>';
		  $test .= $email_username . '</br>';
		  $test .= $password_hash . '</br>';
		
		}
		

	    //----------------------------------------------------------------------------

		return $test;
	
	}//End of insert User
	
	
	
	
	
	
}