<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slides_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getDataSlides()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'slides_topbanner');
		$dl = $this->db->get('homepageattr');
		$dl = $dl->result_array();
		foreach ($dl as $value) {
			$dulieu = $value['giatrithuoctinh'];
		}
		return $dulieu;
	}
	public function updateData($dulieu)
	{
		$dl = array(
			'tenthuoctinh' => 'slides_topbanner',
			'giatrithuoctinh' => $dulieu
		);
		$this->db->where('tenthuoctinh', 'slides_topbanner');
		return $this->db->update('homepageattr', $dl);
	}
	public function updateJsonHeader($dlHeader)
	{
		$this->db->where('tenthuoctinh', 'quanlyheader');
		$dl = array(
			'id'=>2,
			'tenthuoctinh' => 'quanlyheader',
			'giatrithuoctinh'=>$dlHeader
		);
		return $this->db->update('homepageattr', $dl);
	}
	public function getJsonHeader()
	{
		$this->db->select('giatrithuoctinh');
		$this->db->where('tenthuoctinh', 'quanlyheader');
		$dlHeader = $this->db->get('homepageattr');
		$dlHeader = $dlHeader->result_array();
		return $dlHeader[0]['giatrithuoctinh'];
	}
}

/* End of file slide_model.php */
/* Location: ./application/models/slides_model.php */