<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
	class Login extends CI_Controller { 

		public function __construct()
			{
				parent::__construct();
				$this->load->model('user_model');
				$this->load->library('session');
			}	

		public function index() 
			{ 
				$this->load->helper('url');
				$this->load->view('Web_Pages/Login');
			}

		function login_user()
			{
				$user_login=array(
						'email'=>$this->input->post('email'),
						'password'=>md5($this->input->post('password'))
					);
				$tipe_akun = 0;

				$arr = $this->user_model->get_email();
				// print_r($arr);
				foreach ($arr as $array) 
					{
						if($array == $user_login['email'])
							$tipe_akun = 1;
					}
				if($tipe_akun == 1)
					$data=$this->user_model->login_agen($user_login['email'],$user_login['password']);
				else 
					$data=$this->user_model->login_user($user_login['email'],$user_login['password']);
				if($data)
					{
						$this->session->sess_expiration = '360';
						$this->session->set_userdata('id',$data['id']);
						$this->session->set_userdata('email',$data['email']);
						$this->session->set_userdata('nama',$data['nama']);
						$this->session->set_userdata('tipe_akun',$data['tipe_akun']);
						$this->session->set_userdata('tgl_lahir',$data['tgl_lahir']);
						$this->session->set_userdata('email',$data['email']);
						$this->session->set_userdata('no_kontak',$data['no_kontak']);
						redirect('Homepage');
					}
				else
					{
						$this->session->set_flashdata('error_msg', 'Error occured,Try again.');
						redirect('Login');
					}
			}

		public function user_logout()
			{
				$this->session->sess_destroy();
				redirect('Homepage', 'refresh');
			}
	}
?>
