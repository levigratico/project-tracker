<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createissue extends MY_Controller {

	private $colname = ('');

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('themodeloftruth');
	}

	public function index()
	{
		$this->add_script('public/js/sortable.js');
		$this->load->library('dropdown');
		$var = $this->dropdown->getArr();
		$this->addmViewData($var);
		$this->render('body/projecttracker');
	}


	public function insert()
	{
		$this->themodeloftruth->insertdata('issue_tbl', $this->getValue());
		echo 'success';

	}

	private function getValue(){
		$arr = array(
						    'issue_title' => ($this->input->post('title') == TRUE) ? $this->input->post('title') : null,
						     'issue_desc' => ($this->input->post('description') == TRUE) ? $this->input->post('description') : null,
						     'created_by' => ($this->session->userdata('id') == TRUE) ? $this->session->userdata('id') : null,
						    'assigned_to' => ($this->input->post('0') == TRUE) ? $this->input->post('0') : null,
					     'modules_tbl_id' => ($this->input->post('1') == TRUE) ? $this->input->post('1') : null,
						 	 'qa_type_id' => ($this->input->post('2') == TRUE) ? $this->input->post('2') : null,
						 	'git_repo_id' => ($this->input->post('3') == TRUE) ? $this->input->post('3') : null,
					   'platform_type_id' => ($this->input->post('4') == TRUE) ? $this->input->post('4') : null,
					     'track_issue_id' => ($this->input->post('issue_id') == TRUE) ? $this->input->post('issue_id') : null,
					      'issue_type_id' => ($this->input->post('6') == TRUE) ? $this->input->post('6') : null,
					     'priority_level' => ($this->input->post('5') == TRUE) ? $this->input->post('5') : null,
				   'issue_approved_by_id' => ($this->input->post('approved') == TRUE) ? $this->input->post('approved') : null,
					     	   'isActive' => 1
					);

		return $arr;
	}


	public function createWithTrackId($id, $title,$approved_by)
	{
			$this->themodeloftruth->updateisActive(array('isActive' => 0), 'issue_tbl', array('id' => $id));
			$this->addmViewData(
						  array(
								            'track_id' => $id,
								         'track_title' => $title,
								'issue_approved_by_id' => $approved_by
							   )
						  	   );
			$this->index();
	}
}

/* End of file createissue.php */
/* Location: ./application/controllers/createissue.php */