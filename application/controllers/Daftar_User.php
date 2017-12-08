<?php 
	defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Daftar_User extends CI_Controller
		{
			public function __construct()
				{
					parent::__construct();
					$this->load->helper('url');
					$this->load->model('user_model');
					$this->load->library('session');
				}	

			public function index() 
				{ 
					$this->load->helper('url');
					$this->load->view('Web_Pages/Daftar_User');
				}

			public function register_user()
				{
					$tipe_akun = $this->input->post('tipe_akun'); 
					$no_kontak_1 = $this->input->post('no_kontak_1'); 
					$no_kontak_2 = $this->input->post('no_kontak_2'); 
					$no_kontak_3 = $this->input->post('no_kontak_3'); 
					$rawdate = htmlentities($_POST['tgl_lahir']);
					$tgl_lahir = date('Y-m-d', strtotime($rawdate));
					$user=array(
						'password'=>md5($this->input->post('password')),
						'nama'=>$this->input->post('nama'),
						'tipe_akun'=>$this->input->post('tipe_akun'),
						'tgl_lahir'=>$tgl_lahir,
						'email'=>$this->input->post('email'),
						'no_kontak'=> 'NULL',
						'alamat'=>$this->input->post('alamat'),
					);
					print_r($user);
					$email_check = $this->user_model->email_check($user['email']);
					$no_kontak_check_1 = $this->user_model->no_kontak_check($no_kontak_1);
					$no_kontak_check_2 = $this->user_model->no_kontak_check($no_kontak_2);
					$no_kontak_check_3 = $this->user_model->no_kontak_check($no_kontak_3);
					if($email_check)
						{
							if($no_kontak_check_1 && $no_kontak_check_2 && $no_kontak_check_3)
								{
									if($no_kontak_1 != NULL)
										{
											$kontak_1=array(
													'email_agen_user'=>$this->input->post('email'),
													'no_kontak'=>$this->input->post('no_kontak_1')
												);
											$this->user_model->register_kontak($kontak_1);
										}
									if($no_kontak_2 != NULL)
										{
											$kontak_2=array(
													'email_agen_user'=>$this->input->post('email'),
													'no_kontak'=>$this->input->post('no_kontak_2')
												);		
											$this->user_model->register_kontak($kontak_2);
										}
									if($no_kontak_3 != NULL)
										{
											$kontak_3=array(
													'email_agen_user'=>$this->input->post('email'),
													'no_kontak'=>$this->input->post('no_kontak_3')
												);																					
											$this->user_model->register_kontak($kontak_3);
										}
									if($tipe_akun == 1)
										$this->user_model->register_agen($user);
									else
										$this->user_model->register_user($user);								
									$this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
									redirect('Homepage');
								}
							else
								{
									$this->session->set_flashdata('error_msg', 'Error occured,Try again.');
									redirect('Daftar_User');									
								}
						}
					else
						{
							$this->session->set_flashdata('error_msg', 'Error occured,Try again.');
							redirect('Daftar_User');
						}
				}
		}
?>