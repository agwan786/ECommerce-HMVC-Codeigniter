<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MX_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('cart');
	}

	public function index()
	{
		$data['module'] = 'cart';
		$data['view'] = 'welcome';
		echo Modules::run('template/one_col', $data);
	}

	public function insert()
	{
		echo "Hello World!";die;
	}
}
