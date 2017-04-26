<?php 
defined('BASEPATH') OR exit('No direct script access allowed');




$config['mydata'] = array(

	'site_name' => 'Project Tracker',

	

	'page_title' => 'Project Tracker',


	'scripts' => array(
		'head' => array(),

		'foot' => array(
			'public/js/jquery-3.1.1.min.js',
			'public/js/tether.min.js',
			'public/js/bootstrap.min.js',
			'public/js/mdb.min.js',
			'public/js/jquery-1.12.4.js',
			'http://code.jquery.com/ui/1.12.1/jquery-ui.js'
		)
	),

	'stylesheets' => array(
			'screen' => array(
				'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css',
				'public/css/bootstrap.min.css',
				'public/css/mdb.min.css',
				'http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',
				'public/css/projecttracker.css'
			)
	),


	'body_class' => ''


	);








?>