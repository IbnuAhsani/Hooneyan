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
					$email = $this->input->post('email');
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

					$email_check_1 = $this->user_model->email_check_agen($user['email']);
					$email_check_2 = $this->user_model->email_check_user($user['email']);

					if($email_check_1 == false || $email_check_2 == false)
						{
							$this->session->set_flashdata('error_msg', "<div class='font-only' style='color:white;'>Email Anda tidak boleh sama dengan Email yang sudah terdaftar<div>");
							redirect('Daftar_User');	
						}							
					$no_kontak_check_1 = $this->user_model->kontak_check_agen($no_kontak_1);
					$no_kontak_check_2 = $this->user_model->kontak_check_agen($no_kontak_2);
					$no_kontak_check_3 = $this->user_model->kontak_check_agen($no_kontak_3);
					$no_kontak_check_4 = $this->user_model->kontak_check_user($no_kontak_1);
					$no_kontak_check_5 = $this->user_model->kontak_check_user($no_kontak_2);
					$no_kontak_check_6 = $this->user_model->kontak_check_user($no_kontak_3);

					if($no_kontak_1 == $no_kontak_2 || $no_kontak_1 == $no_kontak_3)
						{
							$no_kontak_check_4 = false;
							$this->session->set_flashdata('error_msg', "<div class='font-only' style='color:white;'>Nomor Kontak yang sama tidak boleh diinputkan dua/tiga kali<div>");
							redirect('Daftar_User');
						}
					else
						{
							$no_kontak_check_4 = true;
						}

					if($no_kontak_2 != NULL && $no_kontak_3 != NULL)
						{
							if($no_kontak_2 == $no_kontak_3)
								{
									$no_kontak_check_5 = false;
									$this->session->set_flashdata('error_msg', "<div class='font-only' style='color:white;'>Nomor Kontak yang sama tidak boleh diinputkan dua/tiga kali<div>");
									redirect('Daftar_User');									
								}
							else
								{
									$no_kontak_check_5 = true;
								}
						}
					else
						{
							$no_kontak_check_5 = true;
						}

					if($email_check_1 && $email_check_2 && $no_kontak_check_1 && $no_kontak_check_2 && $no_kontak_check_3 && $no_kontak_check_4 && $no_kontak_check_5 && $no_kontak_check_6)
						{
							if($tipe_akun == 1)
								{
									$this->user_model->register_agen($user);
								}
							else
								{
									$this->user_model->register_user($user);								
								}
						}
					else
						{
							$this->session->set_flashdata('error_msg', "<div class='font-only' style='color:white;'>Nomor Kontak Anda tidak boleh sama dengan Nomor Kontak yang sudah terdaftar<div>");
							redirect('Daftar_User');							
						}

					if($tipe_akun == 1)
						{
							$data = $this->user_model->get_id_agen($email);
						}
					else
						{
							$data = $this->user_model->get_id_user($email);
						}

					foreach($data->result() as $dat)
						{
							$id = $dat->id;
						}

					if($tipe_akun == 1)
						{
							if($no_kontak_1 != NULL)
								{
									$kontak_1=array(
											'id_agen'=> $id,
											'no_kontak'=>$no_kontak_1
										);
									$this->user_model->register_kontak_agen($kontak_1);
								}
							if($no_kontak_2 != NULL)
								{
									$kontak_2=array(
											'id_agen'=> $id,
											'no_kontak'=>$no_kontak_2
										);		
									$this->user_model->register_kontak_agen($kontak_2);
								}
							if($no_kontak_3 != NULL)
								{
									$kontak_3=array(
											'id_agen'=> $id,
											'no_kontak'=>$no_kontak_3
										);																					
									$this->user_model->register_kontak_agen($kontak_3);
								}
							redirect('Homepage');									
						}
					else
						{
							if($no_kontak_1 != NULL)
								{
									$kontak_1=array(
											'id_user'=> $id,
											'no_kontak'=>$no_kontak_1
										);
									$this->user_model->register_kontak_user($kontak_1);
								}
							if($no_kontak_2 != NULL)
								{
									$kontak_2=array(
											'id_user'=> $id,
											'no_kontak'=>$no_kontak_2
										);		
									$this->user_model->register_kontak_user($kontak_2);
								}
							if($no_kontak_3 != NULL)
								{
									$kontak_3=array(
											'id_user'=> $id,
											'no_kontak'=>$no_kontak_3
										);																					
									$this->user_model->register_kontak_user($kontak_3);
								}
							redirect('Homepage');										
						}
				}
		}
?>