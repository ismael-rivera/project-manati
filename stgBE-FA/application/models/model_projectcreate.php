<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Model_signup extends MY_Model {
    
	public function __construct()
	{
	 	parent::__construct(); 
	}
	
	public function insert_user(){
	
		$project_type     = $this->input->post('project_type');	
		$project_title    = $this->input->post('project_title');	
		$project_category = $this->input->post('project_category');	
		$project_  = $this->input->post('project_');	
		$project_  = $this->input->post('project_');
		$project_ = $this->input->post('project_');	
		$project_  = $this->input->post('project_');	
		$project_     = $this->input->post('project_');	
		$project_  = $this->input->post('project_');	
		$project_  = $this->input->post('project_');
		
		$keypass = 'du_du_chinhi_' . $password;	
		$password_hash  = password_hash($keypass, PASSWORD_BCRYPT);
				
		//--------------------------------------------------------------------------
		
		$sqlch1 = 'SELECT user_name FROM users WHERE user_name = ? OR email = ?';
		$sqlcheck1 = $this->db->query($sqlch1, array($username, $email));
		
		if($this->db->affected_rows() > 0)
		{
		  print_r('Number of affected rows:' . $this->db->affected_rows() .'</br>');			
		  echo 'Either the Username or email already exists.</br>';
			 
		} else {
			
		  $sql = 'INSERT INTO users ( first_name, last_name, email, user_name, password )	
				  VALUES (' . $this->db->escape($firstname) . ',
						  ' . $this->db->escape($lastname) . ',
						  ' . $this->db->escape($email) . ',
						  ' . $this->db->escape($username) . ',
						  ' . $this->db->escape($password_hash) . ')';
			
		  $result = $this->db->query($sql);
			
		}

	    //----------------------------------------------------------------------------

		return $result;
	
	}//End of insert User
	
	
	
	
	
	
}