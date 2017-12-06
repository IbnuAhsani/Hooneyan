<?php
	class m_daftar_properti extends CI_model
		{
			public function register_properti($properti)
				{
					$this->db->insert('properti', $properti);
				}
		}
?>
