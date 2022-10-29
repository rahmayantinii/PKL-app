<?php

class Detail_model extends CI_Model
{
	
	public function get_data()
	{
		
		return $this->db->get('detail_pembayaran');
	}

	public function get_detail($id)
	{
		$this->db->select('*');
		$this->db->from('detail_pembayaran');
		$this->db->join('bulan_pembayaran', 'bulan_pembayaran.id_bulan = detail_pembayaran.id_bulan');
		return $this->db->get();
	}
}