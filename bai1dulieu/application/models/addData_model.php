<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert($so_,$gia_)
	{
		$dulieu = array('so'=>$so_ ,'gia' => $gia_);
		$this->db->insert('so_sim', $dulieu);

		return $this->db->insert_id();// tra va id phan tu day
	}
}

/* End of file addData_model.php */
/* Location: ./application/models/addData_model.php */