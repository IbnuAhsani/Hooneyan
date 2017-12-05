<?php
	class m_properti_page extends CI_model
		{
	

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
				
						// Fungsi untuk melakukan proses upload file
	public function upload(){
		$config['upload_path'] = './gambar/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}
	
	// Fungsi untuk menyimpan data ke database
	public function save($upload){
		$data = array(
			'nama_properti'=>$this->input->post('nama_properti'),
            'desc_properti'=>$this->input->post('desc_properti'),
            'kategori_properti'=>$this->input->post('kategori_properti'),
			'lokasi_properti'=>$this->input->post('lokasi_properti'),
			'luas_properti'=>$this->input->post('luas_properti'),
			'luas_tanah'=>$this->input->post('luas_tanah'),
			'harga_properti'=>$this->input->post('harga_properti'),
			'status_properti'=>$this->input->post('status_properti'),
			'kondisi_properti'=>$this->input->post('kondisi_properti'),
            'jumlah_ktidur'=>$this->input->post('jumlah_ktidur'),
            'jumlah_kmandi'=>$this->input->post('jumlah_kmandi'),
            'jumlah_garasi'=>$this->input->post('jumlah_garasi'),
			'jumlah_lantai'=>$this->input->post('jumlah_lantai'),
            'daya_listrik'=>$this->input->post('daya_listrik'),
			'gambar' => $upload['file']['file_name']
		);
		
		$this->db->insert('properti', $data);
	}

	
	 public function data_terbaru(){
			$this->db->select('*');
			$this->db->from('properti');
			$this->db->order_by('id_properti', 'desc');
			$this->db->limit(6);
			return $properti = $this->db->get();
		
		
            }
		}
?>
