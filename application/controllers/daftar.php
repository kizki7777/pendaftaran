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
		$data['error'] = '';
		
		$this->load->view('daftar', $data);
	}

	function add()
	{
	    $config['upload_path'] = './uploads/';
	    $config['allowed_types'] = 'pdf';
	    $config['max_size'] = '300';
	    $config['file_name'] = 'CV_'.$this->input->post('name');

	    $this->load->library('upload', $config);

	    if ( ! $this->upload->do_upload('cv'))
	    {
	        // no file uploaded or failed upload
	        $data['meta_title'] = 'Kesalahan upload!';
	        $data['error'] = '<div class="error message"><p>'.$this->upload->display_errors().'</p></div>';
	        $this->load->view('daftar', $data);
	    }
	    else
	    {
	        // success
	        $data = array('upload_data' => $this->upload->data());

	        $file_name = $data["upload_data"]["file_name"];

	        $data = array(
						'nama' => $this->input->post('name'),
						'email' => $this->input->post('email'),
						'message' => $this->input->post('message'),
						'cv' => $file_name
					);

			$this->daftar_model->add($data);

			$data['meta_title'] = 'Berhasil terdaftar!';
			$data['info'] = $data;

	        $this->load->view('sukses', $data);
	    }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/daftar.php */