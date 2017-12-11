<?php
	class User_model extends CI_model
		{
			 public function __construct()
				{
		        parent::__construct();
		   			$this->load->helper('url');
		   	 		$this->load->model('user_model');
						$this->load->library('session');
				}	

			public function get_email()
				{
					$sql = "SELECT `email` FROM `agen`";
					$query = $this->db->query($sql);
					$array1=$query->result_array();
					return array_map (function($value)
						{
						    return $value['email'];
						}, $array1);
					 // print_r($arr);
				}

			public function get_id_agen($email)
				{
					$query = $this->db->get_where('agen', array('email' => $email));
					return $query;
				}

			public function get_id_user($email)
				{
					$query = $this->db->get_where('user', array('email' => $email));
					return $query;
				}

			public function register_user($user)
				{
					$this->db->insert('user', $user);
				}

			public function register_agen($agen)
				{
					$this->db->insert('agen', $agen);
				}

			public function register_kontak_agen($kontak)
				{
					$this->db->insert('kontak_agen', $kontak);
				}

			public function register_kontak_user($kontak)
				{
					$this->db->insert('kontak_user', $kontak);
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

			public function login_agen($email,$pass)
				{
					$this->db->select('*');
					$this->db->from('agen');
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

			public function email_check_user($email)
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

			public function email_check_agen($email)
				{
					$this->db->select('*');
					$this->db->from('agen');
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

			public function kontak_check_user($no_kontak)
				{
					if($no_kontak == NULL)
						{
							return true;
						}
					else
						{
							$this->db->select('*');
							$this->db->from('kontak_user');
							$this->db->where('no_kontak',$no_kontak);
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

			public function kontak_check_agen($no_kontak)
				{
					if($no_kontak == NULL)
						{
							return true;
						}
					else
						{
							$this->db->select('*');
							$this->db->from('kontak_agen');
							$this->db->where('no_kontak',$no_kontak);
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
	}

?>
