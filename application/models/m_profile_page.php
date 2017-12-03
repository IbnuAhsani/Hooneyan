<?php
	class m_profile_page extends CI_model
		{
			 public function __construct()
				{
		         parent::__construct();
		   			$this->load->helper('url');
		   	 		$this->load->model('m_profile_page');
					$this->load->library('session');
				}	

			public function get_name($tipe_akun, $nama)
				{
					if($tipe_akun == 1)
					{
						// $sql = query("SELECT `email` FROM `agen` WHERE 'nama' == $nama");
						$query = $this->db->get_where('agen', array('nama' => $nama));
						return $query->result();
					}
					else
					{
						// $sql = query("SELECT `email` FROM `user` WHERE 'nama' == $nama");
						// return $sql->result();
					}
				}

		}
?>
