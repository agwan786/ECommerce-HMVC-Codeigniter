<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MX_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->helper('form');
	}

	public function index()
	{
		$data['module'] = 'cart';
		$data['view'] = 'welcome';
		echo Modules::run('template/one_col', $data);
	}

	public function insert()
	{
		$data = array(
               'id'      => 'sku_123ABC',
               'qty'     => 1,
               'price'   => 39.95,
               'name'    => 'T-Shirt',
               'options' => array('Size' => 'L', 'Color' => 'Red')
            );

		$res = $this->cart->insert($data); 
		//echo "<pre>";print_r($res);die;
		$data['module'] = 'cart';
		$data['view'] = 'insert';
		echo Modules::run('template/one_col', $data);
	}

	public function deleteCart(){
		$data = $this->cart->product_options('0256a32c98ce49afbe2a4eb8c96c5884');
		// echo "<pre>";print_r($data);die;
		$this->cart->destroy();
		echo "Cart deleted successfully";die;
	}
}
