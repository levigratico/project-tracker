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
		$this->add_script('public/js/main.js');
		$this->render('body/mainview');
	}



	public function check()
	{
		
	}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */