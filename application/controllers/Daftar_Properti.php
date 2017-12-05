<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Daftar_Properti extends CI_Controller { 

	function __construct()
		{
			parent::__construct();		
			$this->load->model('m_properti_page');
			$this->load->helper(array('form', 'url'));
			$this->load->library('session');
		}

    public function index() 
     { 
       $this->load->view('Web_Pages/Daftar_Properti');
     }
		

	public function tambah_properti()
		{
			$data = array();
			$id_agen = $this->session->userdata('id');

			// Jika user menekan tombol Submit (Simpan) pada form
			// lakukan upload file dengan memanggil function upload yang ada di model
			if($this->input->post('submit'))
				{ 	
					// Jika proses upload sukses
					// Panggil function save yang ada dimodel untuk menyimpan data ke database
					$upload = $this->m_properti_page->upload();		
					if($upload['result'] == "success")
						{ 
							$this->m_properti_page->save($upload, $id_agen);	
						}
					// Jika proses upload gagal
					else
						{ 
							// Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
							$data['message'] = $upload['error']; 
						}
				}
			$this->load->view('Web_Pages/Profile_Page', $data);
		}
   
   



}