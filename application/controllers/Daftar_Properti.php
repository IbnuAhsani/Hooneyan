<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Daftar_Properti extends CI_Controller { 

<<<<<<< HEAD
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
||||||| merged common ancestors
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
=======
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
 public function index() 
  { 
    $this->load->helper('url');
    $this->load->view('Web_Pages/Daftar_Properti');
  }
}
>>>>>>> 5536d0d77d21dd155dae5dca0806bac4ae00dbde
