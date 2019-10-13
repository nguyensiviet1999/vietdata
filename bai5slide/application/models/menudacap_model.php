<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menudacap_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertMenu($dulieu)
	{
		return $this->db->insert('menudacap', $dulieu);
	}
	public function getDataMenu()
	{
		$this->db->select('*');
		$dl = $this->db->get('menudacap');
		return $dl->result_array();
	}

}

/* End of file menudacap_model.php */
/* Location: ./application/models/menudacap_model.php */