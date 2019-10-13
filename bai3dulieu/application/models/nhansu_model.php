<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nhansu_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertData($dulieu)
	{
		$this->db->insert('nhan_vien', $dulieu);
		return $this->db->insert_id();
	}
	public function getData()
	{
		$this->db->select('*');
		$this->db->order_by('id', 'asc');
		$data = $this->db->get('nhan_vien'); 
		$data = $data->result_array();
		return $data;
	}
	public function getDataById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$data = $this->db->get('nhan_vien');
		$data = $data->result_array();
		return $data;
	}
	public function deleteDataById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('nhan_vien');
	}
	public function updateDataById($id,$dulieu)
	{
		$this->db->where('id', $id);
		return $this->db->update('nhan_vien', $dulieu);
		
	}
}

/* End of file nhansu_model.php */
/* Location: ./application/models/nhansu_model.php */