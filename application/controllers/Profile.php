<?php

/**
 * 
 */
class Profile extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->loged->redirect();

		$this->load->model('users');
	}

	public function index()
	{
		$data['user'] = $this->users->get($this->session->userdata('user_id'));

		$data['content'] = $this->load->view('profile/v-profile',$data, true);
		$this->load->view('v-main',$data);
	}

	public function edit()
	{
		# code...
		$data['user'] = $this->users->get($this->session->userdata('user_id'));
		$data['content'] = $this->load->view('profile/v-edit',$data, true);
		$this->load->view('v-main',$data);
	}

	public function save()
	{
		# code...
		$val['fullname'] = $this->input->post('fullname');

		// upload profile
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']     = 2*1024;
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
		$config['file_name'] = uniqid().rand(1000,9999);

		$this->load->library('upload', $config);

// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
		$this->upload->initialize($config);
		if ($this->upload->do_upload('profile_image'))
		{
			$file = $this->upload->data();
			$val['profile'] = $file['file_name'];
		}

		$id = $this->session->userdata('user_id');

		$this->users->update($val,$id);
		redirect(site_url('profile'));
		exit();
	}

	public function changepassword()
	{
		$data['content'] = $this->load->view('profile/v-change',null, true);
		$this->load->view('v-main',$data);
	}

	public function savepass()
	{
		$oldpass = $this->input->post('oldpass');

		$p1 = $this->input->post('p1');
		$p2 = $this->input->post('p2');

		$this->load->library('encrypt');

		$row = $this->users->get($this->session->userdata('user_id'));

		if ($oldpass != $this->encrypt->decode($row->password)) {
			echo 'Old password not match !';
			exit();
		}

		if ($p1 != $p2) {
			echo 'new password not match !';
			exit();
		}

		$val['password'] = $this->encrypt->encode($p1);

		$id = $this->session->userdata('user_id');

		$this->users->update($val,$id);
		redirect(site_url('profile'));
		exit();

	}
}






