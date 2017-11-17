<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Daftar_User extends CI_Controller {

 public function __construct(){

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
  
  public function register_user(){

      $user=array(
      'nama_user'=>$this->input->post('nama_user'),
	  'email'=>$this->input->post('email'),
      'password'=>md5($this->input->post('password'))
        );
        print_r($user);

$email_check=$this->user_model->email_check($user['email']);

if($email_check){
  $this->user_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('Login');

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('Daftar_User');


}

}
}