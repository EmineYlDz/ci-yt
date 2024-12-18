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
	public function getAllUsers()
	{
		return $this->db->get('users')->result();

	}
	// public function checkuser($email,$password)
	// {
    //   $this->db->select('*')->from('users')
	//     ->where('email,$email')
	// 	->where('password',$password)->limit(1)->get()->result();
	// }
	public function checkuser($email, $pass)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email', $email);
		$this->db->where('password', $pass);
		$this->db->limit(1);
		return $this->db->get()->result();

	}

	// public function getuser($id)
	// {
	//   return $this->db->select('*')->from('users')->where('id',$id)->limit(1)->get()->row();

	// }

	public function getuser($id)
	{
		return $this->db->where('id', $id)->get('users')->row();

	}
	public function update($id)
	{
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'password' => md5($this->input->post('password')),
			'created_by' => 'admin',
		);
        $this->db->where('id',$id);
		$query = $this->db->update('users', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}
	public function destroy($id)
	{
        $this->db->where('id',$id);
		return $this->db->delete('users');
	}


}



?>