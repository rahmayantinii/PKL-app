<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('form_validation');
		
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login Page';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();

		if($user) {

				if ($user['password'] == true ) {
				$data = [
					'username' => $user['username'],
					'id_jabatan' => $user['id_jabatan']
				];
				$this->session->set_userdata($data);
				if ($user['id_jabatan'] == 1) {
					redirect('admin');
				} else if ($user['id_jabatan'] == 2) {
					redirect('bendahara');
				} else {
					redirect('users');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered!</div>');
				redirect('auth');
		}

	}

	public function registration()
	{
		$this->form_validation->set_rules('nama_lengkap', 'Nama', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
			'is_unique' => 'This username has already registered!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
			'min_length' => 'Password too short!'
		]);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Halaman User Registration';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');
		} else {
			$data = [
				'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'id_jabatan' => 3,
			];


			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>');
				redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
			redirect('auth');

	} 

	public function profile($id)
	{
		$data['title'] = 'Profile Saya';
		$data['user'] = $this->User_model->profile(47)->result_array();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('auth/profile', $data);
		$this->load->view('templates/footer');
	}

	public function forgotPassword()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		if($this->form_validation->run() == false) {
			$data['title'] = 'Forgot Password';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/forgot-password');
			$this->load->view('templates/auth_footer');
		} else {
			$username = $this->input->post('username');
			$user = $this->db->get_where('user', ['username' => $username])->row_array();

			if($user) { 
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'username' => $username,
					'token' => $token,
				];

				$this->db->insert('user_token', $user_token);

					redirect('auth/resetpassword?username=' . $this->input->post('username') . '&token=' . urlencode($token));


			} else {
 				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered!</div>');
					redirect('auth/forgotpassword');

			}
		}
		
	}

	public function resetPassword()
	{
		$username = $this->input->get('username');
		$token = $this->input->get('token');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();

		if($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if($user_token) { 
				$this->session->set_userdata('reset_username', $username);
				$this->changePassword();
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong token.</div>');
					redirect('auth');
			}

		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong username.</div>');
				redirect('auth');
		}
	}

	public function changePassword()
	{
		if(!$this->session->userdata('reset_username')) {
			redirect('auth');
		}
		$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[3]|matches[password1]');
		if($this->form_validation->run() == false) {
			$data['title'] = 'Change Password';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/change-password');
			$this->load->view('templates/auth_footer');
		} else {
			$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
			$username = $this->session->userdata('reset_username');

			$this->db->set('password', $password);
			$this->db->where('username', $username);
			$this->db->update('user');

			$this->session->unset_userdata('reset_username');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password has been changed! Please login.</div>');
				redirect('auth');
		}
		
	}
}
