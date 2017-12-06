<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Jualsewa_Page extends CI_Controller { 

	function __construct()
		{
			parent::__construct();		
			$this->load->model('m_jualsewa_page');
			$this->load->helper(array('form', 'url'));
			$this->load->library('session');
		}

	public function index() 
		{ 
			$this->load->model('m_jualsewa_page');
			$data['properti']= $this->m_jualsewa_page->jualsewa();
			$this->load->view('Web_Pages/Jualsewa_Page', $data);
 }
 
 
 
}