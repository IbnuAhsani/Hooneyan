<?php 
	defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Properti_Page extends CI_Controller { 

		function __construct()
			{
				parent::__construct();		
				$this->load->model('m_properti_page');
				$this->load->helper(array('form', 'url'));
				$this->load->library('session');
			}

		public function index() 
			{ 
				$this->load->view('Web_Pages/Properti_Page/get_data');
			}

		public function get_data()
			{
				$id_properti = $this->input->post('id_properti');
				$id_agen = $this->input->post('id_agen');
				$data["properti"] = $this->m_properti_page->pilih($id_properti);
				$data["agen"] = $this->m_properti_page->pilih_agen($id_agen);
				$data["kontak"] = $this->m_properti_page->pilih_kontak($id_agen);
				$this->load->view('Web_Pages/Properti_Page', $data);
			}

		public function book_properti()
			{
				if (isset($_POST['book'])) 
					{
						$id_properti = $this->input->post('id_properti');
						$id_booker = $this->input->post('id_booker');
						$id_agen = $this->input->post('id_agen');
						$tipe_akun = $this->input->post('tipe_akun');
						$this->m_properti_page->book($id_properti, $id_booker);
						$data["properti"] = $this->m_properti_page->pilih($id_properti);
						$data["agen"] = $this->m_properti_page->pilih_agen($id_agen);
						$this->load->model('m_profile_page');
						$data["kontak"] = $this->m_profile_page->get_data_kontak($tipe_akun, $id_agen);
						$this->load->view('Web_Pages/Properti_Page', $data);
					}
				elseif (isset($_POST['confirm'])) 
					{
						$id_properti = $this->input->post('id_properti');						
						$id_agen = $this->input->post('id_agen');
						$id_booker = $this->input->post('id_booker');						
						$tipe_akun = $this->input->post('tipe_akun');						
						$harga_properti = $this->input->post('harga_properti');						
						$this->m_properti_page->confirm($id_properti);
						$this->m_properti_page->transaction($id_booker, $id_properti, $harga_properti);
						$data["properti"] = $this->m_properti_page->pilih($id_properti);
						$data["agen"] = $this->m_properti_page->pilih_agen($id_agen);
						$this->load->model('m_profile_page');						
						$data["kontak"] = $this->m_profile_page->get_data_kontak($tipe_akun, $id_agen);
						$this->load->view('Web_Pages/Properti_Page', $data);
					}
				elseif (isset($_POST['deny'])) 
					{
						$id_properti = $this->input->post('id_properti');						
						$id_agen = $this->input->post('id_agen');	
						$id_booker = $this->input->post('id_booker');		
						$tipe_akun = $this->input->post('tipe_akun');																							
						$this->m_properti_page->deny($id_properti);
						$this->m_properti_page->cancel_transaction($id_booker, $id_properti);
						$data["properti"] = $this->m_properti_page->pilih($id_properti);
						$data["agen"] = $this->m_properti_page->pilih_agen($id_agen);
						$this->load->model('m_profile_page');						
						$data["kontak"] = $this->m_profile_page->get_data_kontak($tipe_akun, $id_agen);						
						$this->load->view('Web_Pages/Properti_Page', $data);
					}
				elseif (isset($_POST['delete'])) 
					{
						$id_properti = $this->input->post('id_properti');						
						$id_agen = $this->input->post('id_agen');	
						$tipe_akun = $this->input->post('tipe_akun');	
						$email = $this->input->post('email');	
						$this->m_properti_page->delete($id_properti, $id_agen);
						$this->load->model('m_profile_page');
						$data["properti"] = $this->m_profile_page->tampilByUser($tipe_akun, $id_agen);
						$data["user"] = $this->m_profile_page->get_data_user($tipe_akun, $id_agen);
						$data["kontak"] = $this->m_profile_page->get_data_kontak($tipe_akun, $id_agen);
						$this->load->view('Web_Pages/Profile_Page', $data);
					}												
			}

		public function edit_properti()
			{
				$id_properti = $this->uri->segment(3);
				$data["properti"] = $this->m_properti_page->pilih($id_properti);
				$this->load->view('Web_Pages/Edit_Daftar_Properti', $data);
			}

		public function update_data()
			{
				$id_properti = $this->input->post('id_properti');
				$id = $this->input->post('id');	
				$tipe_akun = $this->input->post('tipe_akun');	
				$upload = $this->m_properti_page->upload();
				$this->m_properti_page->update($id_properti, $upload);
				$this->load->model('m_profile_page');
				$data["properti"] = $this->m_profile_page->tampilByUser($tipe_akun, $id);
				$data["user"] = $this->m_profile_page->get_data_user($tipe_akun, $id);
				$data["kontak"] = $this->m_profile_page->get_data_kontak($tipe_akun, $id);
				$this->load->view('Web_Pages/Profile_Page', $data);				
			}			
	}