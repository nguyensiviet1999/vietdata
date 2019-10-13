<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class datban_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertData($data)
	{
		$this->db->insert('datban', $data);
		return $this->db->insert_id();
	}
	public function getDataByTableName($tablename)
	{
		$this->db->select('*');
		$dl = $this->db->get($tablename);
		return $dl->result_array();
	}
}

/* End of file  */
/* Location: ./application/models/ */