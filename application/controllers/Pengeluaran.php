<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengeluaran_model');
		$this->load->model('Aset_model');
		$this->load->model('User_model');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data['title'] = 'Data Pengeluaran';
		$data['pengeluaran'] = $this->Pengeluaran_model->get_data('pengeluaran')->result_array();
		$data['aset'] = $this->Aset_model->get_data('aset')->result_array();
		$data['user'] = $this->User_model->get_user('user')->result_array();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/pengeluaran/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Data Pengeluaran';
		$data['aset'] = $this->Aset_model->get_data('aset')->result_array();
		$data['user'] = $this->User_model->get_user('user')->result_array();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/pengeluaran/tambah', $data);
	}

	public function tambahAksi()
	{
		$this->Pengeluaran_model->tambahAksi();
		//$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil ditambahkan!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  //  <span aria-hidden="true">&times;</span>
		    //</button></div>');
			redirect('pengeluaran/index');
	}

	public function hapus($id)
	{
		$this->Pengeluaran_model->hapus($id);
		redirect('pengeluaran/index');
	}

	public function ubah($id)
	{
		$data['title'] = 'Ubah Data Pengeluaran';
		$data['pengeluaran'] = $this->Pengeluaran_model->ambilIdPengeluaran($id);
		$where = array('id_pengeluaran' =>$id);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/pengeluaran/ubah', $data);
		$this->load->view('templates/footer');
	}

	public function ubahAksi()
	{
		$this->Pengeluaran_model->ubahAksi();
		//$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil diubah!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  //  <span aria-hidden="true">&times;</span>
		    //</button></div>');
			redirect('pengeluaran/index');
	}
}


