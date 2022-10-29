<?php

class User_model extends CI_Model
{
	
	public function get_data()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('jabatan', 'jabatan.id_jabatan = user.id_jabatan');
		return $this->db->get('');
	}

	public function get_user()
	{
		return $this->db->get('user');
	}

	public function tambahAksi()
	{
		$data = [
			"username" => $this->input->post('username'),
			"nama_lengkap" => $this->input->post('nama_lengkap'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			"id_jabatan" => $this->input->post('id_jabatan'),

		];

		$this->db->insert('user', $data);
	}

	public function hapus($id)
	{
		$this->db->where('id_user', $id);
		$this->db->delete('user');

	}

	public function profile($id='')
	{
		if ($id){
			$this->db->where("user.id_user",$id);
		}
		return $this->db->get('');

	}

	public function ambilIdUser($id)
	{
		return $this->db->get_where('user', ['id_user' => $id])->row_array();
	}

	public function ubahAksi()
	{
		$data = [
			"username" => $this->input->post('username'),
			"nama_lengkap" => $this->input->post('nama_lengkap'),
			"password" => $this->input->post('password'),
			"id_jabatan" => $this->input->post('id_jabatan'),

		];

		$this->db->where('id_user', $this->input->post('id_user'));
		$this->db->update('user', $data);
	}

	//public function getIdUser($id)
	//{
		//$query = $this->db->query("SELECT * FROM user WHERE id_user='$id'");
		//return $query->result_array();

	//}
}