<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->db->cache_off();
		$this->load->model('esg_model');
		$this->load->model('admin_model');
		$this->load->model('admin_menu_model');
		$this->load->model('suplier_model');
		$this->load->library('esg');
		$this->load->library('ZEA/zea');
		$this->esg_model->init();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function clear_list()
	{
		$this->load->view('suplier/index');
	}

	public function edit($id = 0)
	{
		$id = @intval($id);
		$this->load->view('index',['id'=>$id]);
	}

	public function detail($id = 0)
	{
		$this->load->view('index',['data'=>$this->suplier_model->detail($id)]);
	}

}