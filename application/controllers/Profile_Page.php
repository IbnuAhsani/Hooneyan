<?php 
	defined('BASEPATH') OR exit('No direct script access allowed'); 
	class Profile_Page extends CI_Controller { 

		/** 
		* Index Page for this controller. 
		* 
		* Maps to the following URL 
		*   http://example.com/index.php/welcome 
		* - or - 
		*   http://example.com/index.php/welcome/index 
		* - or - 
		* Since this controller is set as the default controller in 
		* config/routes.php, it's displayed at http://example.com/ 
		* 
		* So any other public methods not prefixed with an underscore will 
		* map to /index.php/welcome/<method_name> 
		* @see https://codeigniter.com/user_guide/general/urls.html 
		*/ 
	
		public function __construct()
			{
				parent::__construct();
				$this->load->model('m_profile_page');
				$this->load->library('session');
			}	
		public function index() 
			{ 
				$this->load->helper('url');
				redirect(base_url('index.php/Profile_Page/tampil_data'));	
			}

		public function data()
			{
				$tipe_akun = $this->session->userdata('tipe_akun');
				$id = $this->session->userdata('id');
				$data["row"] = $this->m_profile_page->get_data($tipe_akun, $id);
				$this->load->view('Web_Pages/Profile_Page', $data);
			}

		public function tampil_data()
			{
				$id_agen = $this->session->userdata('id');
				$data["properti"] = $this->m_profile_page->tampilByUser($id_agen);
				// var_dump($data["properti"]); die();
				$this->load->view('Web_Pages/Profile_Page', $data);
			}
	}
?>