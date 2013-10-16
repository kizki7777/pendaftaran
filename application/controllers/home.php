<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// title
		$data['meta_title'] = 'Pendaftaran';
		$data['error'] = '';
		
		$this->load->view('home', $data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */