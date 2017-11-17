<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Login extends CI_Controller { 

 public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}	
 public function index() 
 { 
    $this->load->helper('url');
    $this->load->view('Web_Pages/Login');
 }
 
 
 function login_user(){
  $user_login=array(

  'email'=>$this->input->post('email'),
  'password'=>md5($this->input->post('password'))

    );

    $data=$this->user_model->login_user($user_login['email'],$user_login['password']);
      if($data)
      {
        $this->session->set_userdata('id_user',$data['id_user']);
        $this->session->set_userdata('email',$data['email']);
        $this->session->set_userdata('nama_user',$data['nama_user']);


        $this->load->view('Web_Pages/Homepage.php');

      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("Web_Pages/Login");

      }


}
public function user_logout(){

  $this->session->sess_destroy();
  redirect('Login', 'refresh');
}
}