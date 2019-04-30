<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loged extends CI_Model {

	private $_uid;

	public function __construct()
	{
		parent::__construct();
	//Do your magic here
		$this->_uid = $this->session->userdata('user_id');
	}

	public function isLoged()
	{
			if ($this->_uid > 0) {
				return true;
			}

			return false;
	}

	public function isAdmin()
	{
		$admin =  $this->session->userdata('role');
		if ($admin=='admin') {
			return true;
		}
		return false;
	}

	public function redirect()
	{
		if (!$this->isLoged()) {
		  redirect(site_url('welcome'));	
		}
	}

	public function admin()
	{
		if (!$this->isAdmin()) {
			redirect(site_url('profile'));
		}
	}
}

/* End of file Loged.php */
/* Location: ./application/models/Loged.php */