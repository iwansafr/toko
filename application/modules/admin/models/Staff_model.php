<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_model extends CI_Model
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
					'username'=>$data['name'],
					'password'=>encrypt('123456'),
					'email'=>'esoftgreat@gmail.com',
					'user_role_id'=>4,
					'active'=>1
				];
				$this->db->insert('user',$user_data);
				$user_id = $this->db->insert_id();
				$this->db->update('store_staff',['user_id'=>$user_id],['id'=>$id]);
			}
		}
	}
}