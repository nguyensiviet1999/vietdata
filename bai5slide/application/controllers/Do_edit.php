<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Do_edit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('slides_model');
	}

	public function index()
	{
		//lấy dữ liệu qua model
		$dl = $this->slides_model->getDataSlides();
		//bien json thanh mảng
		$dl = json_decode($dl,true);
		//truyền vào view sửa
		$dl = array('mangdl' => $dl);
		$this->load->view('editSlide_view', $dl, FALSE);
	}

}

/* End of file Do_edit.php */
/* Location: ./application/controllers/Do_edit.php */