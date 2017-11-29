<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Daftar_Properti extends CI_Controller 
   { 
      public function __construct()
        {
          parent::__construct();
          $this->load->helper('url');
          $this->load->model('m_daftar_properti');
          $this->load->library('session');
        } 

       public function index() 
        { 
          $this->load->helper('url');
          $this->load->view('Web_Pages/Daftar_Properti');
        }

      public function register_properti()
      {
        $user=array(
            'nama_properti'=>md5($this->input->post('nama_properti')),
            'desc_properti'=>$this->input->post('desc_properti'),
            'tipe_properti'=>$this->input->post('tipe_properti'),
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
          );

        $this->user_model->register_user($user);
      }
   }