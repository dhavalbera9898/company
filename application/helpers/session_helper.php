<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function is_login() {

	$CI = & get_instance(); 
	$isLoggedIn = $CI->session->userdata('atpa_user_id');
	if( $isLoggedIn ) {
		return TRUE;
	}else{	
		$CI->session->set_flashdata('login_fail', 'Invalid userid or password.');
		redirect(base_url('login'));
	}
}

?>