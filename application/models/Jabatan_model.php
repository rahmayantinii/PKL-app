<?php

class Jabatan_model extends CI_Model
{
	
	public function get_data()
	{
		
		return $this->db->get('jabatan');
	}

	public function tambahAksi()
	{
		$data = [
			"nama_jabatan" => $this->input->post('nama_jabatan'),

		];

		$this->db->insert('jabatan', $data);
	}

	public function hapus($id)
	{
		$this->db->where('id_jabatan', $id);
		$this->db->delete('jabatan');

	}

	public function ambilIdJabatan($id)
	{
		return $this->db->get_where('jabatan', ['id_jabatan' => $id])->row_array();
	}

	public function ubahAksi()
	{
		$data = [
			"nama_jabatan" => $this->input->post('nama_jabatan'),

		];

		$this->db->where('id_jabatan', $this->input->post('id_jabatan'));
		$this->db->update('jabatan', $data);
	}
}