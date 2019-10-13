<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getdatabase()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('so_sim');
		//dua ket qua ve dang array
		$ketqua = $ketqua->result_array();

		// echo "<pre>";
		// var_dump($ketqua);//in ra du lieu tho lay tu database
		return $ketqua;
	}
	public function deleteDataById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('so_sim');
	}
	public function editDataById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dulieu = $this->db->get('so_sim');
		$dulieu = $dulieu->result_array();
		// echo '<pre>';
		// var_dump($dulieu);
		return $dulieu;
	}
	public function updateDataById($id,$so,$gia)
	{
		$dulieuUpdated = array(
			'id'=>$id,
			'so'=>$so,
			'gia'=>$gia
		);
		$this->db->where('id', $id);
		return $this->db->update('so_sim', $dulieuUpdated);
	}

}

/* End of file showData_model.php */
/* Location: ./application/models/showData_model.php */