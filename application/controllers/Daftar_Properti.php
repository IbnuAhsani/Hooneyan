<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Daftar_Properti extends CI_Controller { 

	function __construct(){
		parent::__construct();		
		$this->load->model('m_properti');
		$this->load->helper('url');
 
	}

       public function index() 
        { 
          $this->load->helper('url');
          $this->load->view('Web_Pages/Daftar_Properti');
        }

      public function register_properti()
      {
        $properti=array(
            'nama_properti'=>$this->input->post('nama_properti'),
            'deskripsi'=>$this->input->post('deskripsi'),
            'kategori_properti'=>$this->input->post('kategori_properti'),
			'status_properti'=>$this->input->post('status_properti'),
			'kondisi_properti'=>$this->input->post('kondisi_properti'),
            'lokasi_properti'=>$this->input->post('lokasi_properti'),
            'luas_bangunan'=>$this->input->post('luas_bangunan'),
            'luas_tanah'=>$this->input->post('luas_tanah'),
			'jumlah_lantai'=>$this->input->post('jumlah_lantai'),
            'daya_listrik'=>$this->input->post('daya_listrik'),
            'jumlah_ktidur'=>$this->input->post('jumlah_ktidur'),
            'jumlah_kmandi'=>$this->input->post('jumlah_kmandi'),
            'jumlah_garasi'=>$this->input->post('jumlah_garasi'),
			'harga_properti'=>$this->input->post('harga_properti')
          );

        $this->m_properti->register_properti($properti);
		redirect('Daftar_Properti');
      }
   


      public function register_properti2()
      {
        $user=array(
            'password'=>md5($this->input->post('password')),
            'nama_user'=>$this->input->post('nama_user'),
            'tipe_akun'=>$this->input->post('tipe_akun'),
            'tgl_lahir'=>$tgl_lahir,
            'email'=>$this->input->post('email'),
            'no_kontak'=>$this->input->post('no_kontak'),
          );
      }
   



}