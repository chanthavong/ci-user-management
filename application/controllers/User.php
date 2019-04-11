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
		echo 'index';
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

		$id = $this->users->insert($val);
		if ($id > 0) {
			echo 'seaved id = '. $id;
		}

	}

	public function edit($id=0,$name='')
	{
		# code...
		$data['id1'] = $id;
		$data['name'] = $name;
		$view_edit = $this->load->view('user/user-edit',$data,true);
		$data['view_edit'] = $view_edit;

		$this->load->view('user/user-index', $data);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */