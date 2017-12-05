<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Homepage extends CI_Controller { 

 public function index() 
 { 
    $this->load->helper('url');
	$this->load->model('m_properti_page');
	$data['properti']= $this->m_properti_page->data_terbaru();
	$this->load->view('Web_Pages/Homepage',$data);
 }
 

}