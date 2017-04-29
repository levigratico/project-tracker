<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Themodeloftruth extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->database();
	}


	function insertdata($table, $data)
	{
		$this->db->insert($table, $data);
	}


	//custom model for library
	function getDropDown($table)
	{
		$var = $this->db->get($table)->result();
		$arr = array();
		foreach ($var as $key => $value)
		{
			# code...
			$arr[$value->name] = $value->id;
		}
		return $arr;
	}

	function dropdownUser()
	{
		$var = $this->db->select('id, firstname, lastname')
						->from('user_tbl')
						->get()
						->result();
		$arr = array();
		foreach ($var as $key => $value)
		{
			# code...
			$name = $value->firstname . ' ' . $value->lastname;
			$arr[$name] = $value->id;
		}
		return $arr;
	}


	function record_count()
	{
		return $this->db->select('*')
						->from('issue_tbl')
					//	->where('issue_status', 'pending')
						->where('isActive', 1)
						->where('issue_approved_by_id is NOT ', NULL, FALSE)
						->get()
						->num_rows();
	}

	function fetch_issues($limit, $start)
	{
		$query = $this->db->select('id,issue_title,issue_desc,track_issue_id,issue_approved_by_id')
						->from('issue_tbl')
					//	->where('issue_status', 'pending')
						->where('isActive', 1)
						->where('issue_approved_by_id is NOT ', NULL, FALSE)
						->limit($limit, $start)
						->get();
		if($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				# code...
				$data[] = $row;
			}

			return $data;
		}

		return false;
	}


	function updateisActive($arr = array(), $table, $con = array())
	{
		$this->db->set($arr);
		foreach ($con as $key => $value)
		{
			# code...
			$this->db->where($key, $value);
		}
		$this->db->update($table);
	}


	function generalSelect($id, $table)
	{
		return $this->db->select("*")
						->from($table)
						->where("id", $id)
						->get()
						->result('array')[0];
	}
}

/* End of file themodeloftruth.php */
/* Location: ./application/models/themodeloftruth.php */