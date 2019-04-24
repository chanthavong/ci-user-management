<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('users');
	}

	public function index()
	{
		$rows_user['users'] = $this->users->get_all();

		$data['content'] = $this->load->view('user/user-index', $rows_user, true);
		$this->load->view('v-main', $data, FALSE);
	}

	public function add()
	{
		$data['content'] = $this->load->view('user/user-add', null, true);
		$this->load->view('v-main', $data, FALSE);
	}

	public function save()
	{
		# code...
		$val['fullname'] = $this->input->post('fullname');
		$val['email'] = $this->input->post('email');
		$val['password'] = $this->input->post('password');
		$val['role'] = $this->input->post('role');

		$this->load->library('encrypt');

		$val['password'] = $this->encrypt->encode($val['password']);

		$id = $this->input->post('id');
		if($id > 0){
			$this->users->update($val,$id);
			redirect(site_url('user'));
			exit();
		}


		$id = $this->users->insert($val);
		if ($id > 0) {
			echo 'seaved id = '. $id;
		}

	}

	public function edit($id=0)
	{
		$this->load->library('encrypt');
		$data_user['user'] = $this->users->get($id);
		$data['content'] = $this->load->view('user/user-edit', $data_user, true);
		$this->load->view('v-main', $data, FALSE);
	}

	public function delete($id)
	{
		$this->users->delete($id);
		redirect(site_url('user'));
		exit();
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */