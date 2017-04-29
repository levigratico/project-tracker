<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listofissue extends MY_Controller {

	private $dataHtml = array();

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('themodeloftruth');
		$this->load->library('pagination');
	}

	public function index()
	{
		
		$config["base_url"] = $this->getBaseUrl() . "index.php/listofissue/index/";
		$config["total_rows"] = $this->themodeloftruth->record_count();
		$config["per_page"] = 5;
		$config["uri_segment"] = 3;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = $choice;


		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["results"] = $this->themodeloftruth->fetch_issues($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		$this->add_script('public/js/issue.js');
		$this->addmViewData($data);
		$this->render('body/issues');
	}




	public function history($id)
	{
		$var = $this->recursive($id, $this->dataHtml);
		$this->load->library('history', $var);
		
	}




	private function recursive($id, &$arr)
	{
	   $init = $this->themodeloftruth->generalSelect($id, "issue_tbl");
	   array_push($arr, $init);
	   if(is_null($init['track_issue_id']))
	   {
	   		return $arr;

	   }
	   else
	   {	
	   		return $this->history($init['track_issue_id'], $arr);

	   }

	}

}

/* End of file listofissue.php */
/* Location: ./application/controllers/listofissue.php */