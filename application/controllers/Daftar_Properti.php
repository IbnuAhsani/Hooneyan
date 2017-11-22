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
            'password'=>md5($this->input->post('password')),
            'nama_user'=>$this->input->post('nama_user'),
            'tipe_akun'=>$this->input->post('tipe_akun'),
            'tgl_lahir'=>$tgl_lahir,
            'email'=>$this->input->post('email'),
            'no_kontak'=>$this->input->post('no_kontak'),
          );
      }
   }