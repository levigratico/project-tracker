

<?php

	/**
	*
	*/
	class Querybuilder
	{


		private $boolChecker;
		private $CI;
		private $result = array();

		public function __construct($accesstype = array())
		{
			# code...
			$this->boolChecker = $accesstype['access'];
			$this->CI =& get_instance();
			$this->CI->load->model('themodeloftruth');
		}

		public function done()
		{
			$sql = array();
			if($this->boolChecker == 1)
			{
				$sql[0] = "SELECT * FROM issue_tbl WHERE issue_status =
			 		'DONE' AND assigned_to = " .
			 		$this->CI->session->userdata('id');
			}
			else if($this->boolChecker == 2)
			{

			}
			else
			{

			}

			if(!empty($sql))
			{
				$this->fetch($sql);
			}


			return FALSE;


		}


		public function backlog()
		{
			$sql = array();
			if($this->boolChecker == 1)
			{
				/*$sql[0] = "SELECT * FROM issue_tbl WHERE issue_status =
			 		'PENDING' AND assigned_to = " .
			 		$this->CI->session->userdata('id');*/
			 	$sql[0] = "SELECT * FROM issue_tbl WHERE start_date IS NOT NULL AND isActive = 1 AND assigned_to = " .
			 		$this->CI->session->userdata('id');

			}
			else if($this->boolChecker == 2)
			{
			 	$sql[0] = "SELECT * FROM issue_tbl WHERE issue_status =
			 		'PENDING' AND assigned_to = " .
			 		$this->CI->session->userdata('id');
			}
			else
			{

			}


			if(!empty($sql))
			{
				$this->fetch($sql);
			}


			return FALSE;

		}

		public function forApproval()
		{
			$sql = array("SELECT * FROM issue_tbl WHERE issue_type_id IN(2,3) AND issue_approved_by_id IS NULL");
			$this->fetch($sql);
		}




		public function listofissue()
		{


			$sql = array();

			if($this->boolChecker == 0)
			{
				$sql[0] = "SELECT * FROM issue_tbl WHERE issue_type_id IN (1,2,3)";
			}
			else if($this->boolChecker == 1)
			{
				$sql[0] = "SELECT * FROM issue_tbl WHERE issue_type_id = 1 AND assigned_to = ".$this->CI->session->userdata('id');
				$sql[1] = "SELECT * FROM issue_tbl WHERE issue_type_id IN(2,3) AND issue_approved_by_id IS NOT NULL AND assigned_to = ".$this->CI->session->userdata('id');

			}
			else if($this->boolChecker == 2)
			{
				$sql[0] = "SELECT * FROM issue_tbl WHERE qa_type_id IS NOT NULL AND git_repo_id IS NOT NULL AND assigned_to = ".$this->CI->session->userdata('id');

			}
			else
			{
				$sql[0] = "SELECT * FROM issue_tbl WHERE issue_type_id IN (1,2,3)";
			}


			if(!empty($sql))
			{
				$this->fetch($sql);
			}

			return FALSE;
		}

		public function getResult()
		{
			return $this->result;
		}


		public function getCount()
		{
			return count($this->result);
		}

		private function fetch($sql)
		{
			$this->result = $this->CI->themodeloftruth->fetch_issues($sql);
			return TRUE;
		}



	}

 ?>
