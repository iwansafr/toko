<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('esg_model');
		$this->load->model('admin_model');
		$this->load->model('admin_menu_model');
		$this->load->library('esg');
		$this->load->library('ZEA/zea');
		$this->esg_model->init();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function edit()
	{
		$this->load->view('index');
	}

	public function clear_list()
	{
		$this->load->view('product/index');
	}

	public function category()
	{
		$this->load->view('index');
	}

	public function category_clear()
	{
		$this->load->view('Product/category');
	}
}