<?php

class Detail_model extends CI_Model
{
	
	public function get_data($id='')
	{
		$this->db->select('*');
		$this->db->from('detail_pembayaran','siswa.id_siswa');
		$this->db->join('siswa', 'siswa.id_siswa = detail_pembayaran.id_siswa', 'left');
		$this->db->join('bulan_pembayaran', 'bulan_pembayaran.id_bulan = detail_pembayaran.id_bulan');
		if ($id){
			$this->db->where("detail_pembayaran.id_bulan",$id);
		}
		return $this->db->get('');
	}

	//public function getAll()
	//{
		//return $this->db
		//->select('detail_pembayaran.*','siswa.siswa')
		//->join('siswa','detail_pembayaran.id_siswa=siswa.id_siswa','left')
		//->get('detail_pembayaran')
		//->result_array();

	//}

	public function get_datuu($id='')
	{
		$this->db->select('*');
		$this->db->from('detail_pembayaran');
		return $this->db->get('');
	}


	public function get_bulan()
	{
		$data = $this->db->get('bulan_pembayaran')->result_array();

		$result = [];
		foreach ($data as $key => $value) {
			$result[$key] = $value;
			$result[$key]['total_semua'] = 0;

			$detail = $this->db->where("id_bulan",$value['id_bulan'])->get("detail_pembayaran")->result_array();
			

			$total = 0;
			foreach ($detail as $i => $value) {
				$total += $value['minggu_ke_1'] + $value['minggu_ke_2'] + $value['minggu_ke_3'] + $value['minggu_ke_4'] + $value['minggu_ke_5'];
			}
			$result[$key]['total_semua'] = $total;
		
		}

		return $result;

	}

	public function get_det()
	{
		return $this->db->get('detail_pembayaran');

	}

	public function tambahAksi()
	{
		$data = [
			"nama_bulan" => $this->input->post('nama_bulan'),
			"tahun" => $this->input->post('tahun'),
			"pembayaran_perminggu" => $this->input->post('pembayaran_perminggu'),

		];

		$this->db->insert('bulan_pembayaran', $data);
	}

	public function tambahAk()
	{
		$data = [
			"id_siswa" => $this->input->post('id_siswa'),
		];

		$this->db->insert('detail_pembayaran', $data);
	}

	public function ubah()
	{
		$data = [
			"id_siswa" => $this->input->post('id_siswa'),
			"id_bulan" => $this->input->post('id_bulan'),
			"minggu_ke_1" => $this->input->post('minggu_ke_1'),
			"minggu_ke_2" => $this->input->post('minggu_ke_2'),
			"minggu_ke_3" => $this->input->post('minggu_ke_3'),
			"minggu_ke_4" => $this->input->post('minggu_ke_4'),
			"minggu_ke_5" => $this->input->post('minggu_ke_5'),
		];

		$this->db->where('id_detail', $this->input->post('id_detail'));
		$this->db->update('detail_pembayaran', $data);
	}

	public function detail($id)
	{
		$query = $this->db->query("SELECT * FROM bulan_pembayaran WHERE id_bulan='$id'");
		return $query->result_array();

	}

	public function hapus($id)
	{
		$this->db->where('id_bulan', $id);
		$this->db->delete('bulan_pembayaran');

	}

	public function ambilIdDetail($id)
	{
		return $this->db->get_where('detail_pembayaran', ['id_detail' => $id])->row_array();
	}

	public function ubahAksi()
	{
		$data = [
			"nama_bulan" => $this->input->post('nama_bulan'),
			"tahun" => $this->input->post('tahun'),
			"pembayaran_perminggu" => $this->input->post('pembayaran_perminggu'),

		];

		$this->db->where('id_bulan', $this->input->post('id_bulan'));
		$this->db->update('bulan_pembayaran', $data);
	}
}