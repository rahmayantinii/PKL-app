<?php

class Siswa_model extends CI_Model
{
	
	public function get_data()
	{
		
		return $this->db->get('siswa');
	}

	public function tambahAksii()
	{
		$data = [
			"nisn" => $this->input->post('nisn'),
			"nama_siswa" => $this->input->post('nama_siswa'),
			"jk" => $this->input->post('jk'),
			"nohp" => $this->input->post('nohp'),
			"email" => $this->input->post('email'),

		];

		$this->db->insert('siswa', $data);
	}

	public function hapus($id)
	{
		$this->db->where('id_siswa', $id);
		$this->db->delete('siswa');

	}

	public function ambilIdSiswa($id)
	{
		return $this->db->get_where('siswa', ['id_siswa' => $id])->row_array();
	}

	public function ubahAksi()
	{
		$data = [
			"nisn" => $this->input->post('nisn'),
			"nama_siswa" => $this->input->post('nama_siswa'),
			"jk" => $this->input->post('jk'),
			"nohp" => $this->input->post('nohp'),
			"email" => $this->input->post('email'),

		];

		$this->db->where('id_siswa', $this->input->post('id_siswa'));
		$this->db->update('siswa', $data);
	}
}