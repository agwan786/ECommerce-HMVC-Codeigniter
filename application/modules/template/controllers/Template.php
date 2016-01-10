<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Template extends MX_Controller {
	public function __construct(){
		$this->load->helper('url');
	}

	public function one_col($data)
	{
		$this->load->view('template/one_column', $data);
	}

	public function two_col($data)
	{
		$this->load->view('two_columns', $data);
	}

	public function three_col($data)
	{
		$this->load->view('three_columns', $data);
	}

}
