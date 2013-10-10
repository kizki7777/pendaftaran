<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('daftar_model');
	}

	public function index()
	{
		// title
		$data['meta_title'] = 'Pendaftaran';
		$data['body_class'] = '';
		
		$this->load->view('daftar', $data);
	}

	function add()
	{
		$info = array(
					'nama' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'message' => $this->input->post('message'),
					'cv' => $this->input->post('cv'),
				);

		$data['members'] = $this->daftar_model->add($info);

		redirect('daftar/sukses', 'refresh');
	}

	function sukses()
	{
		// title
		$data['meta_title'] = 'Berhasil terdaftar!';
		$data['body_class'] = 'blue';
		
		$this->load->view('sukses', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/daftar.php */