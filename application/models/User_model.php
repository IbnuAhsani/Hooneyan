<?php
	class User_model extends CI_model
		{
			
		 public function __construct(){
 
         parent::__construct();
   			$this->load->helper('url');
   	 		$this->load->model('user_model');
			$this->load->library('session');
 
		}
			public function register_user($user)
				{
					$this->db->insert('user', $user);
				}

			public function register_agen($agen)
				{
					$this->db->insert('agen', $agen);
				}

			public function login_user($email,$pass)
				{
					$this->db->select('*');
					$this->db->from('user');
					$this->db->where('email',$email);
					$this->db->where('password',$pass);
					if($query=$this->db->get())
						{
							return $query->row_array();
						}
					else
						{
							return false;
						}
				}

			public function email_check($email)
				{
					$this->db->select('*');
					$this->db->from('user');
					$this->db->where('email',$email);
					$query=$this->db->get();

					if($query->num_rows()>0)
						{
							return false;
						}
					else
						{
							return true;
						}
				}
				
		
		
		}
?>
