<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aset extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Aset_model');
		$this->load->library('form_validation');

	}
	public function index()
	{
		$data['title'] = ' Data Aset';
		$data['aset'] = $this->Aset_model->get_data('aset')->result_array();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/aset/index', $data);
		$this->load->view('templates/footer');

		
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Data aset';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/aset/tambah', $data);

	}

	public function tambahAksi()
	{
		$this->Aset_model->tambahAksi();
		//$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil ditambahkan!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
		   // <span aria-hidden="true">&times;</span>
		    //</button></div>');
			redirect('aset/index');
	}

	public function hapus($id)
	{
		$this->Aset_model->hapus($id);
		redirect('aset/index');
	}

	public function ubah($id)
	{
		$data['title'] = 'Ubah Data aset';
		$data['aset'] = $this->Aset_model->ambilIdaset($id);
		$where = array('id_aset' =>$id);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/aset/ubah', $data);
		$this->load->view('templates/footer');
	}

	public function ubahAksi()
	{
		$this->Aset_model->ubahAksi();
		//$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil diubah!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  //  <span aria-hidden="true">&times;</span>
		    //</button></div>');
			redirect('aset/index');
	}
}