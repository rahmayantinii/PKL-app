<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Jabatan_model');
		$this->load->library('form_validation');

	}
	public function index()
	{
		$data['title'] = ' Data Jabatan';
		$data['jabatan'] = $this->Jabatan_model->get_data('jabatan')->result_array();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/jabatan/index', $data);
		$this->load->view('templates/footer');

		
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Data Jabatan';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/jabatan/tambah', $data);

	}

	public function tambahAksi()
	{
		$this->Jabatan_model->tambahAksi();
		//$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil ditambahkan!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    //<span aria-hidden="true">&times;</span>
		    //</button></div>');
			redirect('jabatan/index');
	}

	public function hapus($id)
	{
		$this->Jabatan_model->hapus($id);
		redirect('jabatan/index');
	}

	public function ubah($id)
	{
		$data['title'] = 'Ubah Data Jabatan';
		$data['jabatan'] = $this->Jabatan_model->ambilIdJabatan($id);
		$where = array('id_jabatan' =>$id);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/jabatan/ubah', $data);
		$this->load->view('templates/footer');
	}

	public function ubahAksi()
	{
		$this->Jabatan_model->ubahAksi();
		//$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil diubah!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    //<span aria-hidden="true">&times;</span>
		    //</button></div>');
			redirect('jabatan/index');
	}
}