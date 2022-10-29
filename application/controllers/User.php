<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Jabatan_model');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data['title'] = 'Data user';
		$data['user'] = $this->User_model->get_data('user')->result_array();
		$data['jabatan'] = $this->Jabatan_model->get_data('jabatan')->result_array();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/user/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Data User';
		$data['jabatan'] = $this->Jabatan_model->get_data('jabatan')->result_array();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/user/tambah', $data);

	}

	public function tambahAksi()
	{
		$this->User_model->tambahAksi();
		//$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil ditambahkan!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    //<span aria-hidden="true">&times;</span>
		    //</button></div>');
			redirect('user/index');
	}

	public function hapus($id)
	{
		$this->User_model->hapus($id);
		redirect('user/index');
	}

	public function ubah($id)
	{
		$data['title'] = 'Ubah Data User';
		$data['user'] = $this->User_model->get_data('user')->result_array();
		$data['jabatan'] = $this->Jabatan_model->get_data('jabatan')->result_array();
		$data['user'] = $this->User_model->ambilIdUser($id);
		$where = array('id_user' =>$id);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/user/ubah', $data);
		$this->load->view('templates/footer');
	}

	public function ubahAksi()
	{
		$this->User_model->ubahAksi();
		//$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil diubah!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    //<span aria-hidden="true">&times;</span>
		    //</button></div>');
			redirect('user/index');
	}
}