<?php

class Aset_model extends CI_Model
{
	
	public function get_data()
	{
		
		return $this->db->get('aset');
	}

	public function tambahAksi()
	{
		$data = [
			"nama_aset" => $this->input->post('nama_aset'),
			"jml_aset" => $this->input->post('jml_aset'),
			"harga_aset" => $this->input->post('harga_aset'),

		];

		$this->db->insert('aset', $data);
	}

	public function hapus($id)
	{
		$this->db->where('id_aset', $id);
		$this->db->delete('aset');

	}

	public function ambilIdaset($id)
	{
		return $this->db->get_where('aset', ['id_aset' => $id])->row_array();
	}

	public function ubahAksi()
	{
		$data = [
			"nama_aset" => $this->input->post('nama_aset'),
			"jml_aset" => $this->input->post('jml_aset'),
			"harga_aset" => $this->input->post('harga_aset'),

		];

		$this->db->where('id_aset', $this->input->post('id_aset'));
		$this->db->update('aset', $data);
	}
}