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

		public function edit_data()
			{
				$id_properti = $this->uri->segment(3);
				$this->load->model('m_profile_page');
				$data["properti"] = $this->m_profile_page->pilih($id_properti);
				$this->load->view('Web_Pages/Edit_Daftar_Properti', $data);
			}

		public function update_data()
			{
				$id_properti = $this->uri->segment(3);
				$nama_properti = $this->input->post('nama_properti');
				$desc_properti = $this->input->post('desc_properti');
				$kategori_properti = $this->input->post('kategori_properti');
				$status_properti = $this->input->post('status_properti');
				$kondisi_properti = $this->input->post('kondisi_properti');
				$lokasi_properti = $this->input->post('lokasi_properti');
				$luas_properti = $this->input->post('luas_properti');
				$luas_tanah = $this->input->post('luas_tanah');
				$jumlah_lantai = $this->input->post('jumlah_lantai');
				$daya_listrik = $this->input->post('daya_listrik');
				$jumlah_ktidur = $this->input->post('jumlah_ktidur');
				$jumlah_kmandi = $this->input->post('jumlah_kmandi');
				$jumlah_garasi = $this->input->post('jumlah_garasi');
				$harga_properti = $this->input->post('harga_properti');

				$this->m_profile_page->update($id_properti, $nama_properti, $desc_properti, $kategori_properti, $status_properti, $kondisi_properti, $lokasi_properti, $luas_properti, $luas_tanah, $jumlah_lantai, $daya_listrik, $jumlah_ktidur, $jumlah_kmandi, $jumlah_garasi, $harga_properti);
				redirect(base_url('index.php/Profile_Page/tampil_data'));	
			}


	}
?>