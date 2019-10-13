<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class json_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertDataJson($ten,$dulieu)
	{
		//tao mang du lieu
		$mangdl = array(
			'ten' => $ten,
			'dulieu' => $dulieu
		);
		$this->db->insert('warehouse', $mangdl);
		return $this->db->insert_id();
	}
	public function getData()
	{
		$this->db->select('*');
		$this->db->where('ten', 'contact');
		$dulieu = $this->db->get('warehouse');
		//chuyển kiểu dữ liệu phức tạp về dạng mảng
		$dulieu = $dulieu->result_array();
		foreach ($dulieu as $value) {
			$kq = $value['dulieu'];
		}
		return $kq;
	}
	public function updateData($dulieu)
	{
		$this->db->where('ten', 'contact');
		$data = array(
			'ten' => 'contact',
			'dulieu' => $dulieu
		);
		return $this->db->update('warehouse', $data);
	}
}

/* End of file json_model.php */
/* Location: ./application/models/json_model.php */