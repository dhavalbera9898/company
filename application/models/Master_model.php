<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Master_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}


	public function validate_user($table,$cond)
	{
		$query = $this->db->get_where($table,$cond);
		return $query->row();
	}

	public function user_company($user_id)
	{
		$this->db->select('*');
		$this->db->from("atpa_company");
		$this->db->where(array('user_id' =>$user_id));
		$query = $this->db->get();
		return  $query->row();
	}

	public function company_profile()
	{
		$this->db->select('*');
		$this->db->from("atpa_company as c");
		$this->db->join("atpa_users as u", "c.user_id = u.user_id",'inner');
		$this->db->where(array('c.user_id' => $this->session->userdata('atpa_user_id')));
		$query = $this->db->get();
		return  $query->row();
	}

	public function get_pending_bill_count($value='')
	{
		$this->db->from('atpa_bill');
		$this->db->where('company_id',$this->session->userdata('company_id'));
		$this->db->where('payment_status','0');
		$count = $this->db->count_all_results();
		return $count;
	}
}
?>