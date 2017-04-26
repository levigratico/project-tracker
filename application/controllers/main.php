<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends  MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->add_script('public/js/sortable.js');
		$this->render('body/issues');
	}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */