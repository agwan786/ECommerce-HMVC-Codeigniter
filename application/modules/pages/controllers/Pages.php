<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MX_Controller {
	public function index()
	{
		$data['module'] = 'pages';
		$data['view'] = 'homepage';
		echo Modules::run('template/one_col', $data);
	}

	public function mytest()
	{
		echo "Hello World!";die;
	}
}
