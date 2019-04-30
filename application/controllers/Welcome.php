<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('users');
	}

	public function index()
	{

		if ($this->session->userdata('user_id') > 0) {
			if ($this->session->userdata('role') == 'admin') {
				redirect(site_url('user'));
				exit();
			}

			redirect(site_url('profile'));
			exit();
		}

		$data = [];
		$data['ms'] = '';

		$submit = $this->input->post('login');
		if ($submit) {
			# code...
			$email = $this->input->post('email');
			$pwd = $this->input->post('password');

			$row = $this->users->where(['email'=>$email])->get();

			if ($row) {
				$this->load->library('encrypt');
				// check password user
				if ($pwd===$this->encrypt->decode($row->password)) {

					$sess['user_id'] = $row->id;
					$sess['role'] = $row->role;
					
					$this->session->set_userdata($sess);

					if ($row->role =='admin') {
						# code...
						redirect(site_url('user'));
						exit();
					}

					redirect(site_url('profile'));
					exit();

				}else{
					$data['ms'] = 'password not found !';
				}
			}else{
					$data['ms'] = 'Email or password not found !';
			}
		}

		$data['content'] = $this->load->view('v-form-login', $data, true);
		$this->load->view('v-main',$data);
	}

	public function profile($value='')
	{
		$this->loged->redirect();
		$data['content'] = $this->load->view('v-prfile',null, true);
		$this->load->view('v-main',$data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url('welcome'));
		exit();
	}
}
