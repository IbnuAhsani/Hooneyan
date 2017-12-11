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

			public function get_data_user($tipe_akun, $id)
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

			public function get_data_kontak($tipe_akun, $id)
				{
					if($tipe_akun == 1)
						{
							$query = $this->db->get_where('kontak_agen', array('id_agen' => $id));
							return $query;
						}
					else
						{
							$query = $this->db->get_where('kontak_user', array('id_user' => $id));
							return $query;
						}
				}

			public function tampilByUser($tipe_akun, $id_agen)
				{
					if($tipe_akun == 1)
						{
							$this->db->select('*');
							$this->db->from('properti');
							$this->db->where('id_agen', $id_agen);
							$this->db->order_by('id_properti', 'desc');
							return $properti = $this->db->get();
						}
					else
						{
							return NULL;
						}
				}

			public function pilih($id_properti)
				{
					$query = $this->db->get_where('properti', array('id_properti' => $id_properti))->row();
					return $query;
				}
				
			public function update($id_properti, $nama_properti, $desc_properti, $kategori_properti, $status_properti, $kondisi_properti, $lokasi_properti, $luas_properti, $luas_tanah, $jumlah_lantai, $daya_listrik, $jumlah_ktidur, $jumlah_kmandi, $jumlah_garasi, $harga_properti)
				{
					$data = array(
							'nama_properti' => $nama_properti,
							'desc_properti' => $desc_properti,
							'kategori_properti' => $kategori_properti, 
							'status_properti' => $status_properti,
							'kondisi_properti' => $kondisi_properti,
							'lokasi_properti' => $lokasi_properti,
							'luas_properti' => $luas_properti,
							'luas_tanah' => $luas_tanah,
							'jumlah_lantai' => $jumlah_lantai,
							'daya_listrik' => $daya_listrik,
							'jumlah_ktidur' => $jumlah_ktidur,
							'jumlah_kmandi' =>  $jumlah_kmandi,
							'jumlah_garasi' => $jumlah_garasi,
							'harga_properti' => $harga_properti
						 );
					$this->db->where('id_properti,',$id_properti);
					$this->db->update('properti', $data);
				}

			public function change_acc($password, $nama, $tgl_lahir, $email, $no_kontak)
				{
					$data = array(
							'password' => $password,
							'nama' => $nama,
							'tipe_akun' => 1, 
							'tgl_lahir' => $tgl_lahir,
							'email' => $email,
							'no_kontak' => $no_kontak
						 );
					$this->db->insert('agen', $data);
				}

			public function delete_acc($id)
				{
					$this->db->delete('user', array('id' => $id));
				}
		}
?>
