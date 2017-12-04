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

			public function get_data($tipe_akun, $nama)
				{
					if($tipe_akun == 1)
					{
						$query = $this->db->get_where('agen', array('id' => $id));
						return $query;
					}
					else
					{
						$query = $this->db->get_where('user', array('id' => $id));
						return $query;
					}
				}

		}
?>
