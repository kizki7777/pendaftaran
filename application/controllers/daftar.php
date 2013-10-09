<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('daftar_model');
	}

	public function index()
	{
		// title
		$data['meta_title'] = 'Pendaftaran';
		
		$this->load->view('daftar', $data);
	}

	function add()
	{
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/daftar.php */