<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	private $soluongtin1trang;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tin_model');
		$this->soluongtin1trang = 2;
	}

	public function index()
	{
		$kq = $this->tin_model->loadTinToBlog($this->soluongtin1trang);
		$sotrang = $this->tin_model->soTrang($this->soluongtin1trang);
		$danhmuc =  $this->tin_model->loadDanhSach();
		$kq = array(
			'mangdltintuc'=>$kq,
			'sotrang' => $sotrang,
			'cacdanhmuc' => $danhmuc
		);
		$this->load->view('blog_view', $kq, FALSE);
	}
	public function page($trang)
	{
		$dl = $this->tin_model->loadtintheotrang($trang,$this->soluongtin1trang);
		$sotrang = $this->tin_model->soTrang($this->soluongtin1trang);
		$danhmuc =  $this->tin_model->loadDanhSach();
		$dl = array(
			'mangdltintuc'=>$dl,
			'sotrang' => $sotrang,
			'cacdanhmuc' => $danhmuc
		);
		$this->load->view('blog_view', $dl, FALSE);
	}
	public function loadchitiettin($id)
	{
		$tin = $this->tin_model->getTintucById($id);
		$danhmuc =  $this->tin_model->loadDanhSach();
		$iddanhmuc = $tin[0]['iddanhmuc'];
		$tincungdanhmuc = $this->tin_model->getTinByIddanhmuc($iddanhmuc);
		$datasession = array(
			'test1'=>'daylatest1',
			'test2'=>'day la test 2'
		);
		$this->session->set_userdata($datasession);//tao moi 1 set session
		$dataunset = array('test1','test2');
		$this->session->unset_userdata($dataunset);//xoa du lieu session

		$tin = array(
			'dulieutin'=>$tin,
			'cacdanhmuc' => $danhmuc,
			'tincungdanhmuc'=>$tincungdanhmuc
		);
		$this->load->view('chitiettin_view',$tin);

	}
	public function loadtintheodanhmuc($iddanhmuc)
	{
		$dltintheodanhmuc = $this->tin_model->getTinByIddanhmuc($iddanhmuc);
		$danhmuc =  $this->tin_model->loadDanhSach();
		$dltintheodanhmuc = array('dltintheodanhmuc'=>$dltintheodanhmuc,'cacdanhmuc' => $danhmuc);
		$this->load->view('tintuctheodanhmuc_view', $dltintheodanhmuc, FALSE);
	}
}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */
