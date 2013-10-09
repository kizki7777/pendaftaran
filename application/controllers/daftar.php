<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function index()
	{
		// title
		$data['meta_title'] = 'Pendaftaran';
		
		$this->load->view('daftar', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/daftar.php */