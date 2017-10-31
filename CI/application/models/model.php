<?php  
 /** 
 *  
 */ 
 class model extends CI_Model 
  { 
   function __construct() 
    { 
     $this->load->database(); 
    } 
   public function all() 
    { 
     $query = $this->db->get('users'); 
     return $query->result_array(); 
    } 
  } 

 ?>