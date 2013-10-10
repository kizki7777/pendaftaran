<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function add($data)
	{
		$this->db->set($data);
		$query = $this->db->insert('tb_member');
		return $query;
	}

}

/* End of file  */
/* Location: ./application/models/ */