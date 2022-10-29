<?php

class Pengeluaran_model extends CI_Model
{
	
	public function get_data()
	{
		$this->db->select('*');
		$this->db->from('pengeluaran');
		$this->db->join('user','user.id_user=pengeluaran.id_user');
		$this->db->join('aset', 'aset.id_aset=pengeluaran.id_aset');
		return $this->db->get('');
	}

	public function get_riwayat()
	{
		$this->db->select('*');
		$this->db->from('riwayat_pengeluaran');
		$this->db->join('pengeluaran', 'pengeluaran.id_pengeluaran=riwayat_pengeluaran.id_pengeluaran');
		return $this->db->get('');
	}

	public function get_sum()
	{
		$this->db->select_sum('');
	}

	public function ambilIdPengeluaran($id)
	{
		return $this->db->get_where('pengeluaran', ['id_pengeluaran' => $id])->row_array();
	}

	public function tambahAksi()
	{
		$data = [
			"id_user" => $this->input->post('id_user'),
			"id_aset" => $this->input->post('id_aset'),
			"tgl_pengeluaran" => $this->input->post('tgl_pengeluaran'),

		];

		$this->db->insert('pengeluaran', $data);
	}

	public function ubahAksi()
	{
		$data = [
			"id_user" => $this->input->post('id_user'),
			"id_aset" => $this->input->post('id_aset'),
			"tgl_pengeluaran" => $this->input->post('tgl_pengeluaran'),

		];

		$this->db->where('id_pengeluaran', $this->input->post('id_pengeluaran'));
		$this->db->update('pengeluaran', $data);
	}

	public function hapus($id)
	{
		$this->db->where('id_pengeluaran', $id);
		$this->db->delete('pengeluaran');

	}

}