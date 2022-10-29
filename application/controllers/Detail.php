<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller 
{

	public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Siswa_model');
		$this->load->model('Detail_model');

	}

	public function detail($id)
	{
		$data['title'] = 'Detail Pembayaran Uang Kas';
		$data['bulan_pembayaran'] = $this->Detail_model->detail($id);
		$data['detail_pembayaran'] = $this->Detail_model->get_data($id)->result_array();
		$data['siswa'] = $this->Siswa_model->get_data('siswa')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/uangKas/detail', $data);
		$this->load->view('templates/footer');
	}

	public function tambahAksi()
	{
		$this->Detail_model->tambahAksi();
		$this->Siswa_model->tambahAksi();
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil ditambahkan!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		    </button></div>');
			redirect('uangKas/detail');
	}

}