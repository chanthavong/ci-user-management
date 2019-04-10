<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		echo 'index';
	}

	public function add()
	{
		echo 'add';
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