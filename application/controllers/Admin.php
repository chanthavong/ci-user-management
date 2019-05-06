<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->loged->admin();
	}

	public function index()
	{
		echo 'admin page';
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */