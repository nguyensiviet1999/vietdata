<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class deleteData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function deleteDataById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('so_sim');
	}

}

/* End of file deleteData_model.php */
/* Location: ./application/models/deleteData_model.php */