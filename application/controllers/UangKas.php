<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UangKas extends CI_Controller 
{

	public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Siswa_model');
		$this->load->model('Detail_model');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data['title'] = 'Data Uang Kas';
		$data['bulan_pembayaran'] = $this->Detail_model->get_bulan('bulan_pembayaran');
		$data['siswa'] = $this->Siswa_model->get_data('siswa')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/uangKas/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Bulan Pembayaran';
		$data['bulan_pembayaran'] = $this->Detail_model->get_bulan('bulan_pembayaran');
		

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/uangKas/tambah', $data);
		$this->load->view('templates/footer');
	}

	public function tambahAksi()
	{
		$this->Detail_model->tambahAksi();
		//$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil ditambahkan!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  //  <span aria-hidden="true">&times;</span>
		    //</button></div>');
			redirect('uangKas/index');
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
 
	public function tambahAksii()
	{
		$this->Detail_model->tambahAksii();
		$this->Siswa_model->tambahAksii();
		//$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil ditambahkan!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  //  <span aria-hidden="true">&times;</span>
		    //</button></div>');
			redirect('uangKas/detail');
	}

	public function tambahM1()
	{
		$this->Detail_model->tambahM1();
		//$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil ditambahkan!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    //<span aria-hidden="true">&times;</span>
		  //  </button></div>');
			redirect('uangKas/detail');
	}

	public function hapus($id)
	{
		$this->Detail_model->hapus($id);
		redirect('uangKas/index');
	}

	public function ubah($id)
	{
		$data['detail_pembayaran'] = $this->Detail_model->get_data($id)->result_array();
		$data['siswa'] = $this->Siswa_model->get_data('siswa')->result_array();
		$data['detail_pembayaran'] = $this->Detail_model->ambilIdDetail($id);
		$where = array('id_detail' =>$id);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/uangKas/detail', $data);
		$this->load->view('templates/footer');
	}
 
	public function ubahAksi()
	{
		$this->Detail_model->ubah();
		//$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil diubah!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  //  <span aria-hidden="true">&times;</span>
		    //</button></div>');
			redirect('uangKas/index');
	}

}


