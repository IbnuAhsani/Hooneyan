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
				$this->load->view('Web_Pages/Properti_Page', $data);
			}

		public function book_properti()
			{
				if (isset($_POST['book'])) 
					{
						$id_properti = $this->input->post('id_properti');
						$id_booker = $this->input->post('id_booker');
						$id_agen = $this->input->post('id_agen');
						$this->m_properti_page->book($id_properti, $id_booker);
						$data["properti"] = $this->m_properti_page->pilih($id_properti);
						$data["agen"] = $this->m_properti_page->pilih_agen($id_agen);
						$this->load->view('Web_Pages/Properti_Page', $data);
					}
				elseif (isset($_POST['confirm'])) 
					{
						$id_properti = $this->input->post('id_properti');						
						$id_agen = $this->input->post('id_agen');
						$this->m_properti_page->confirm($id_properti);
						$data["properti"] = $this->m_properti_page->pilih($id_properti);
						$data["agen"] = $this->m_properti_page->pilih_agen($id_agen);
						$this->load->view('Web_Pages/Properti_Page', $data);
					}
				elseif (isset($_POST['deny'])) 
					{
						$id_properti = $this->input->post('id_properti');						
						$id_agen = $this->input->post('id_agen');						
						$this->m_properti_page->deny($id_properti);
						$data["properti"] = $this->m_properti_page->pilih($id_properti);
						$data["agen"] = $this->m_properti_page->pilih_agen($id_agen);
						$this->load->view('Web_Pages/Properti_Page', $data);
					}
			}
	}