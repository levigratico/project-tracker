<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('themodeloftruth');
		//$this->load->library('pagination');//Do your magic here

	}

	public function index()
	{
		/*$this->load->library('querybuilder', array( 'access' =>$this->session->userdata('access_type')));
		$this->querybuilder->mywork();

		$config["base_url"] = $this->getBaseUrl() . "index.php/mywork/index/";
		$config["total_rows"] = $this->querybuilder->getCount();
		$config["per_page"] = 5;
		$config["uri_segment"] = 3;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = $choice;


		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["results"] = $this->querybuilder->getResult();
		$data["links"] = $this->pagination->create_links();
		$this->add_script('public/js/issue.js');
		$this->addmViewData($data);*/

		if($this->session->userdata('cart'))
		{

			$arr = $this->countCoockie();
			$this->addmViewData($this->themodeloftruth->selectCartIssue($arr));
		}
		$this->add_script('public/js/cart.js');

		$this->render('body/mywork');
	}

	private function countCoockie()
	{
		$temp = $this->session->userdata('cart');
		$temp = explode(" ", $temp);
		return $temp;
	}

	public function claim()
	{
		if($this->verify($this->input->post('issue')))
		{
			$bool = $this->themodeloftruth->update($this->input->post('issue'), 'issue_tbl');
			 if($bool)
		     {
		     	$this->unsetData($this->input->post('issue'));
		     	if($this->session->userdata('cart'))
		     	{
		     		$count = count($this->countCoockie());
		     		echo $count;
		     	}
		     	else
		     	{
		     		echo 0;
		     	}


		     }
		     else
		    {
		    	echo 'error';
		    }

		}
		else
		{
			$this->unsetData($this->input->post('issue'));
			if($this->session->userdata('cart'))
		     	{
		     		$count = count($this->countCoockie());
		     		echo $count;
		     	}
		     	else
		     	{
		     		echo 0;
		     	}
		}
	}



	private function verify($id)
	{
		return ($this->themodeloftruth->verify($id) > 0) ? FALSE : TRUE;
	}

	private function unsetData($id)
	{
		$arr = $this->countCoockie();

		for($i = 0; $i < count($arr); $i++)
		{
			if($id == $arr[$i])
			{

				array_splice($arr, $i, 1);
			}
		}
		if(!empty($arr))
		{
			$string = implode(" ", $arr);
			$this->session->unset_userdata('cart');
			$this->session->set_userdata('cart', $string);
			return;
		}

		$this->session->unset_userdata('cart');


	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
