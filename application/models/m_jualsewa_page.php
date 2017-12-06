<?php
	class m_jualsewa_page extends CI_model
		{
			 public function __construct()
				{
		      parent::__construct();
	   			$this->load->helper('url');
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

			public function tampilByUser($id)
				{
					$query = $this->db->get_where('properti', array('id_agen' => $id));
					return $query;
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
			public function jualsewa()
			{
				$this->db->select('*');
				$this->db->from('properti');
				$this->db->order_by('id_properti');
				return $properti = $this->db->get();
			}

			
		}
?>
