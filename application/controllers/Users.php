<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Detail_model');
		$this->load->model('Siswa_model');
		$this->load->model('Pengeluaran_model');
		$this->load->model('Aset_model');
		$this->load->model('User_model');
		$this->load->library('form_validation');

	}

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
		$this->load->view('templates/sidebarUser', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/dashboard/index', $data);
		$this->load->view('templates/footer');

	}

	public function indexUang()
	{
		$data['title'] = 'Data Uang Kas';
		$data['bulan_pembayaran'] = $this->Detail_model->get_bulan('bulan_pembayaran');
		$data['siswa'] = $this->Siswa_model->get_data('siswa')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebarUser', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/uangKas/index', $data);
		$this->load->view('templates/footer');
	}

	public function indexP()
	{
		$data['title'] = 'Data Pengeluaran';
		$data['pengeluaran'] = $this->Pengeluaran_model->get_data('pengeluaran')->result_array();
		$data['aset'] = $this->Aset_model->get_data('aset')->result_array();
		$data['user'] = $this->User_model->get_user('user')->result_array();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebarUser', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/pengeluaran/index', $data);
		$this->load->view('templates/footer');
	}

	public function indexR()
	{
		$data['title'] = 'Riwayat Pengeluaran Uang Kas';
		$data['user'] = $this->User_model->get_data('user')->result_array();
		$data['pengeluaran'] = $this->Pengeluaran_model->get_data('pengeluaran')->result_array();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebarUser', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/pengeluaran/r-pengeluaran', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Data Pembayaran';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebarUser', $data);
		$this->load->view('templates/topbar', $data);
	}

	public function tambahAksi()
	{
		$this->Detail_model->tambahAksi();
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil ditambahkan!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		    </button></div>');
			redirect('uangKas/index');
	}

	public function detail($id)
	{
		$data['title'] = 'Detail Pembayaran Uang Kas';
		$data['bulan_pembayaran'] = $this->Detail_model->detail($id);
		$data['detail_pembayaran'] = $this->Detail_model->get_data($id)->result_array();
		$data['siswa'] = $this->Siswa_model->get_data('siswa')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebarUser', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/uangKas/detail', $data);
		$this->load->view('templates/footer');


	}

	public function hapus($id)
	{
		$this->Detail_model->hapus($id);
		redirect('uangKas/index');
	}

	public function ubah($id)
	{
		$data['bulan_pembayaran'] = $this->Detail_model->ambilIdBulan($id);
		$where = array('id_bulan' =>$id);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebarUser', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/footer');
	}

	public function ubahAksi()
	{
		$this->Detail_model->ubahAksi();
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil diubah!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		    </button></div>');
			redirect('uangKas/index');
	}

}

