<?php 
	defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Jualsewa_Page extends CI_Controller 
		{ 
			function __construct()
				{
					parent::__construct();		
					$this->load->model('m_jualsewa_page');
					$this->load->helper(array('form', 'url'));
					$this->load->library('session');
				}

			public function index() 
				{ 
					$data['properti']= $this->m_jualsewa_page->jualsewa();
					$this->load->view('Web_Pages/Jualsewa_Page', $data);
				 }

			public function jual_sewa()
				{
					$kategori_properti = $this->input->post('kategori_properti');
					$status_properti = $this->input->post('status_properti');
					$data['properti'] = $this->m_jualsewa_page->sell_rent($kategori_properti, $status_properti);
					$this->load->view('Web_Pages/Jualsewa_Page', $data);
				}
		}