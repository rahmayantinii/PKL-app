<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Detail_model');
		$this->load->model('Siswa_model');
		$this->load->model('Pengeluaran_model');
		$this->load->model('Aset_model');
		$this->load->model('User_model');
		
	}

	public function index()
	{
		$data['title'] = 'Laporan';
		$data['bulan_pembayaran'] = $this->Detail_model->get_bulan();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/laporan/index', $data);
		$this->load->view('templates/footer');
		
	}

	
	public function laporanMasuk($id)
	{
		$data['title'] = 'Laporan Pemasukan';
		$data['bulan_pembayaran'] = $this->Detail_model->detail($id);
		$data['detail_pembayaran'] = $this->Detail_model->get_data($id)->result_array();
		$data['siswa'] = $this->Siswa_model->get_data('siswa')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/laporan/laporanMasuk', $data);
		$this->load->view('templates/footer');

		
	}

	public function cetakLaporanMasuk($id)
	{
		$data['title'] = 'Cetak Laporan Pemasukan';
		$data['bulan_pembayaran'] = $this->Detail_model->detail($id);
		$data['detail_pembayaran'] = $this->Detail_model->get_data($id)->result_array();
		$data['siswa'] = $this->Siswa_model->get_data('siswa')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/laporan/cetakLaporanMasuk', $data);
	}

	public function laporanKeluar($id)
	{
		$data['title'] = 'Laporan Pengeluaran';
		$data['pengeluaran'] = $this->Pengeluaran_model->get_data('pengeluaran')->result_array();
		$data['aset'] = $this->Aset_model->get_data('aset')->result_array();
		$data['user'] = $this->User_model->get_user('user')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/laporan/laporanMasuk', $data);
		$this->load->view('templates/footer');

		
	}

	public function cetakLaporanKeluar($id)
	{
		$data['title'] = 'Cetak Laporan Pemasukan';
		$data['bulan_pembayaran'] = $this->Detail_model->detail($id);
		$data['detail_pembayaran'] = $this->Detail_model->get_data($id)->result_array();
		$data['siswa'] = $this->Siswa_model->get_data('siswa')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/laporan/cetakLaporanMasuk', $data);
	}

}