<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->helper('session');
		is_login();
		$this->load->model('master_model');
	}
	public function index()
	{
		$data['profile'] = $this->master_model->company_profile();
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('profile',$data);
		$this->load->view('layout/footer');
	}
}
