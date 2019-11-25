<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Store_model extends CI_Model
{
	public function save($id = 0)
	{
		$data = $this->input->post();
		if(!empty($id))
		{
			if(!empty($data))
			{
				$user_data =
				[
					'username'=>$data['title'],
					'password'=>encrypt('123456'),
					'email'=>$data['email'],
					'user_role_id'=>2,
					'active'=>1
				];
				$this->db->insert('user',$user_data);
				$user_id = $this->db->insert_id();
				$this->db->update('store',['user_id'=>$user_id],['id'=>$id]);
			}
		}
	}

	public function get_store()
	{
		$user = @$_SESSION[base_url().'_logged_in'];
		$store = [];
		if(!empty($user))
		{
			$store = $this->db->get_where('store',['user_id'=>$user['id']])->row_array();
		}
		return $store;
	}

	public function get_store_id()
	{
		return @intval($this->get_store()['id']);
	}
}