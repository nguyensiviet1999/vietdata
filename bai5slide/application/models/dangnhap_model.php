<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dangnhap_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function loadData()
	{
		$this->db->select('*');
		$dl = $this->db->get('dangnhap');
		return $dl->result_array();
	}
	public function getDataByEmail($email)
	{
		$this->db->select('*');
		$this->db->where('email', $email);
		$data = $this->db->get('dangnhap');
		if ($data=="") {
			return "";
		}
		return $data->result_array();
	}
	public function insertData($ten,$email,$matkhau)
	{
		$dl = array(
			'ten' => $ten,
			'email' => $email,
			'matkhau' => $matkhau
		);
		return $this->db->insert('dangnhap', $dl);
	}
	public function updateDataByiduser($iduser,$ten,$email,$matkhau)
	{
		$object = array(
			'iduser' => $iduser,
			'ten' => $ten,
			'email' => $email,
			'matkhau' => $matkhau
		);
		$this->db->where('iduser', $iduser);
		return $this->db->update('dangnhap', $object);
	}

}

/* End of file dangnhap_model.php */
/* Location: ./application/models/dangnhap_model.php */