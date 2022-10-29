<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class R_pengeluaran extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Pengeluaran_model');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data['title'] = 'Riwayat Pengeluaran Uang Kas';
		$data['user'] = $this->User_model->get_data('user')->result_array();
		$data['pengeluaran'] = $this->Pengeluaran_model->get_data('pengeluaran')->result_array();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/pengeluaran/r-pengeluaran', $data);
		$this->load->view('templates/footer');
	}
}