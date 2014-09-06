<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dojo extends CI_Controller {

	
	public function index()
	{
		$this->load->view('dojo_index');
	}
}
