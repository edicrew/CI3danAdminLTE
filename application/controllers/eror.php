<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eror extends CI_Controller {

	public function index()
	{
		$data = array('title'	=> 'Administrator | LIBSMS',
					'content'		=> 'eror_view');
		$this->load->view('layout/wrapper', $data);
	}
}
