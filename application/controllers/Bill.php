<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bill extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->helper('session');
		is_login();
		$this->load->model('master_model');
	}
	public function index()
	{
		
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('home',$data);
		$this->load->view('layout/footer');
	}
}
