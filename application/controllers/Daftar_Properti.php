<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Daftar_Properti extends CI_Controller { 

	function __construct(){
		parent::__construct();		
		$this->load->model('m_properti_page');
		$this->load->helper(array('form', 'url'));
 
	}

       public function index() 
        { 
          $this->load->view('Web_Pages/Daftar_Properti');
        }
		

	public function tambah_properti(){
		$data = array();
		
		if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
			// lakukan upload file dengan memanggil function upload yang ada di model
			$upload = $this->m_properti_page->upload();
			
			if($upload['result'] == "success"){ // Jika proses upload sukses
				 // Panggil function save yang ada dimodel untuk menyimpan data ke database
				$this->m_properti_page->save($upload);
				
				redirect('Daftar_Properti'); // Redirect kembali ke halaman awal / halaman view data
			}else{ // Jika proses upload gagal
				$data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
		}
		
		$this->load->view('Web_Pages/Daftar_Properti', $data);
	}
   
   



}