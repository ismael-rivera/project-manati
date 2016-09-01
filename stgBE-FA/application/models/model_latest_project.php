<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Latest_project extends MY_Model {
    
	public function __construct()
	{
	 parent::__construct();
	}
	
	function LatestProjectsReadout(){
		
		$query=$this->db->query(
		'SELECT project_name, budget_max, 
		 FLOOR(HOUR(TIMEDIFF(NOW(), end_date)) / 24) AS days,
         MOD(HOUR(TIMEDIFF(NOW(), end_date)), 24) AS hours,
         MINUTE(TIMEDIFF(NOW(), end_date)) AS minutes,
         SECOND(TIMEDIFF(NOW(), end_date)) AS seconds FROM projects');
		
		return $query->result();	
	}
}