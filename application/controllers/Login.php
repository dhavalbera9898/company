<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function __construct()
	{
		parent:: __construct();
		
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
		$this->form_validation->set_message('required','%s');
		$this->form_validation->set_message('valid_email','Please enter valid email.');
		$this->form_validation->set_message('min_length','Yuor password to short.');
		$this->load->model('master_model');

	}
	public function index()
	{
		if ($this->session->userdata('atpa_user_id'))
		{
			redirect(base_url('home'));
		}
		else
		{
			$this->form_validation->set_rules('user_login', 'Please enter UserID.', 'required');
			$this->form_validation->set_rules('password', 'Please enter Password.', 'required|min_length[5]');	 
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('login/login');
			}
			else
			{
				$cond=array(
					'user_login'=>$this->input->post('user_login'),
					'password'=>md5($this->input->post('password')),
					'is_deleted'=>0,
					'status'=>1
				);
				$result = $this->master_model->validate_user('atpa_users',$cond);
				if(!empty($result))
				{
					$company=$this->master_model->user_company($result->user_id);
					
					$data = array(
						'atpa_user_id' => $result->user_id,
						'name' => $result->name,
						'role'=>$result->role,
						'create_date'=>$result->create_date,
					);
					$this->session->set_userdata($data);
					if(isset($company)){
						$data = array(
							'company_id' => $company->company_id
						);	
					}
					$this->session->set_userdata($data);
					
					if($this->session->userdata('admin_last_url'))
					{
						redirect($this->session->userdata('admin_last_url'));
					}
					redirect(base_url('home'));
				}
				else 
				{
					$this->session->set_flashdata('login_fail', 'Invalid userid or password.');
					$this->load->view('login/login');
				}
			}
			//$this->load->view('Admin/login');
		}
	}
	
	public function logout()
	{

		$redirect_part=base_url('login');

		$this->session->sess_destroy();
		redirect($redirect_part);

	}

}
