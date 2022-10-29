<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Dashboard';
		$jabatan = $this->db->query("SELECT * FROM jabatan");
		$user = $this->db->query("SELECT * FROM user");
		$siswa = $this->db->query("SELECT * FROM siswa");
		$aset = $this->db->query("SELECT * FROM aset");
		$data['jabatan'] = $jabatan->num_rows();
		$data['user'] = $user->num_rows();
		$data['siswa'] = $siswa->num_rows();
		$data['aset'] = $aset->num_rows();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/dashboard/index', $data);
		$this->load->view('templates/footer');

	}
}
