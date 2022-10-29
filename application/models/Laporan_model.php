<?php

class Laporan_model extends CI_Model
{
	public function filterTanggal($tglAwal, $tglAkhir)
	{
		$query = $this->db->query("SELECT * FROM pengeluaran WHERE tgl_pengeluaran BETWEEN '$tglAwal' AND '$tglAkhir' ORDER BY tgl_pengeluaran ASC");

		return $query->result();
	}
}
