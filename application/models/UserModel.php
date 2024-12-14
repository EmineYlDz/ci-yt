<?php


class UserModel extends CI_Model
{
  public function store()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'password' => md5($this->input->post('password')),
			'created_by' => 'admin',
		);

		$query = $this->db->insert('users', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}
	public function getalluser()
	{
		return $this->db->get('users')->result();
	}
}



?>