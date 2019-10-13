<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tin_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertDanhMuc($tendanhmuc)
	{
		$mangdl = array(
			'tendanhmuc'=>$tendanhmuc
		);
		return $this->db->insert('danhmuctin', $mangdl);		
	}
	public function loadDanhSach()
	{
		$this->db->select('*');
		$dl = $this->db->get('danhmuctin');
		$dl = $dl->result_array();
		return $dl;
	}
	public function getDanhMucById($iddanhmuc,$tenbang)
	{
		$this->db->select('*');
		$this->db->where('iddanhmuc', $iddanhmuc);
		$dl = $this->db->get($tenbang);
		$dl = $dl->result_array();
		return $dl;
	}
	public function updateDanhMuc($iddanhmuc,$tendanhmuc)
	{
		$dl = array(
			'iddanhmuc'=> $iddanhmuc,
			'tendanhmuc'=> $tendanhmuc
		);
		$this->db->where('iddanhmuc', $iddanhmuc);
		return $this->db->update('danhmuctin', $dl);
	}
	public function deleteDanhMucById($iddanhmuc)
	{
		$this->db->where('iddanhmuc', $iddanhmuc);
		return $this->db->delete('danhmuctin');
	}
	public function insertTin($tieude,$iddanhmuc,$noidungtin,$anhtin,$trichdan)
	{
		$data = array(
			'tieude'=>$tieude,
			'iddanhmuc'=>$iddanhmuc,
			'noidungtin'=>$noidungtin,
			'anhtin'=>$anhtin,
			'trichdan'=>$trichdan
		);
		return $this->db->insert('tintuc', $data);
	}
	public function loadTin()
	{
		$this->db->select('*');
		$dl = $this->db->get('tintuc');
		// $this->db->join('Table', 'table.column = table.column', 'left');
		return $dl->result_array();
	}
	public function updateTinById($id,$tieude,$iddanhmuc,$noidungtin,$anhtin,$trichdan)
	{
		$data = array(
			'id'=>$id,
			'tieude'=>$tieude,
			'iddanhmuc'=>$iddanhmuc,
			'noidungtin'=>$noidungtin,
			'anhtin'=>$anhtin,
			'trichdan'=>$trichdan
		);
		$this->db->where('id', $id);
		return $this->db->update('tintuc', $data);
	}
	public function deleteTinById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('tintuc');	
	}
	public function loadTinToBlog($soluongtin1trang)
	{
		$this->db->select('*');
		$this->db->join('danhmuctin', 'danhmuctin.iddanhmuc = tintuc.iddanhmuc', 'left');
		$ketqua = $this->db->get('tintuc',$soluongtin1trang,0);
		return $ketqua->result_array();
	}
	public function soTrang($soluongtin1trang)
	{
		$this->db->select('*');
		$kq = $this->db->get('tintuc');
		$kq = $kq->result_array();
		$soluongtin = count($kq);
		$sotrang = ceil($soluongtin/$soluongtin1trang);
		return $sotrang;
	}
	public function loadtintheotrang($trang,$soluongtin1trang)
	{
		$this->db->select('*');
		$this->db->join('danhmuctin', 'danhmuctin.iddanhmuc = tintuc.iddanhmuc', 'left');
		$vitri = ($trang-1)*$soluongtin1trang;
		$ketqua = $this->db->get('tintuc',$soluongtin1trang,$vitri);
		
		return $ketqua->result_array();
	}
	public function getTintucById($id)
	{
		$this->db->select('*');
		$this->db->join('danhmuctin', 'danhmuctin.iddanhmuc = tintuc.iddanhmuc', 'left');
		$this->db->where('id', $id);
		$kq = $this->db->get('tintuc');
		return $kq->result_array();
	}
	public function getTinByIddanhmuc($iddanhmuc)
	{
		$this->db->select('*');
		$this->db->from('tintuc');
		$this->db->join('danhmuctin', 'danhmuctin.iddanhmuc = tintuc.iddanhmuc', 'inner');
		$this->db->where('danhmuctin.iddanhmuc', $iddanhmuc);
		$kq = $this->db->get();
		return $kq->result_array();
	}
	
}

/* End of file tin_model.php */
/* Location: ./application/models/tin_model.php */