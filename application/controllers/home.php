<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()	{
		$data = array('title'	=> 'Administrator | LIBSMS',
					'content'		=> 'home/dasbor');
		$this->load->view('layout/wrapper', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/home.php */