<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//$this->load->view('showData_view');

		$this->load->model('showData_model');
		//goi ham  get database 
		$dulieu = $this->showData_model->getdatabase();
		//do du lieu truyền vào view phải là array mà $dulieu dang chỉ là 1 biến nên phải chuyển nó về kiểu array
		$dulieu = array('dulieutucontroller'=> $dulieu);//bien $dulieu thanh mảng với key là dulieutuconttroller
		// echo '<pre>';
		// var_dump($dulieu);
		//load view va truyen du lieu vao view
		$this->load->view('showData_view', $dulieu, FALSE);

	}
	public function deleteData($idnhanduoc)
	{
		$this->load->model('showData_model');
		if($this->showData_model->deleteDataById($idnhanduoc))
		{
			$this->load->view('thanhcong');
		}
		else {
			echo 'xoa that bai';		
		}
	}
	public function editData($id)
	{
		$this->load->model('showData_model');
		$ketqua = $this->showData_model->editDataById($id);
		$ketqua = array('mangketqua'=>$ketqua);
		//truyen ket qua vao view edit de sau du lieu
		$this->load->view('editData_view', $ketqua, FALSE);
	}
	public function updateData()
	{
		$id = $this->input->post('id');
		$so = $this->input->post('so');
		$gia = $this->input->post('gia');

		//echo "$id $so $gia";

		$this->load->model('showData_model');

		if($this->showData_model->updateDataById($id,$so,$gia))
		{
		//	echo 'thanh cong';
			$this->load->view('thanhcong');
		}
		else
		{
		//	echo 'chua thanh cong';
		}
	}
}

/* End of file showData.php */
/* Location: ./application/controllers/showData.php */