<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Siswa_model');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data['title'] = 'Data Siswa';
		$data['siswa'] = $this->Siswa_model->get_data('siswa')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/siswa/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Data Siswa';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/siswa/tambah', $data);
		$this->load->view('templates/footer');
	}

	public function tambahAksi()
	{
		$this->Siswa_model->tambahAksii();
		//$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil ditambahkan!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    //<span aria-hidden="true">&times;</span>
		    //</button></div>');
			redirect('siswa/index');
	}

	public function hapus($id)
	{
		$this->Siswa_model->hapus($id);
		redirect('siswa/index');
	}

	public function ubah($id)
	{
		$data['title'] = 'Ubah Data Siswa';
		$data['siswa'] = $this->Siswa_model->ambilIdSiswa($id);
		$where = array('id_siswa' =>$id);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/siswa/ubah', $data);
		$this->load->view('templates/footer');
	}

	public function ubahAksi()
	{
		$this->Siswa_model->ubahAksi();
		//$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil diubah!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    //<span aria-hidden="true">&times;</span>
		    //</button></div>');
			redirect('siswa/index');
	}
}