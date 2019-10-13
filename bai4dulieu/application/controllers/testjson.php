<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class testjson extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('json_model');
	}

	public function index()
	{
		// //echo 'testjson';
		// $motcontact = array(
		// 	'ten' => "viet2",
		// 	'sdt' => "0987456321"
		// );
		// $caccontact = array();
		// //thêm phần tử vào mảng
		// array_push($caccontact, $motcontact);
		// $motcontact3 = array(
		// 	'ten' => "viet3",
		// 	'sdt' => "0987654321"
		// );
		// array_push($caccontact, $motcontact3);

		// // echo '<pre>';
		// // var_dump($caccontact);
		// // echo '</pre>';

		// //mã hóa dữ liệu array thành json (chuỗi text) để insert vào sql
		// $mahoajson = json_encode($caccontact);
		// // echo '<pre>';
		// // var_dump($mahoajson);
		// // echo '</pre>';
		// //giải mã kiểu json sang array để sử dụng
		// $giaimajson = json_decode($mahoajson);
		// // echo '<pre>';
		// // var_dump($giaimajson);
		// // echo '</pre>';
		// //gọi model để insert dữ liệu
		// $this->load->model('json_model');
		// $this->json_model->insertDataJson('contact',$mahoajson);
		
		$ketqua = $this->json_model->getData();
		// echo '<pre>';
		// var_dump($ketqua);
		// echo '</pre>';
		// echo '<pre>';
		// var_dump(json_decode($ketqua));
		// echo '</pre>';
		$ketqua = json_decode($ketqua);
		//khi decode từ json sang thì nó sẽ chuyển thành dạng object chứ không phải dạng mảng, cho nên nếu muốn lấy dữ liệu từ trong đó ra phải dùng $ketqua->sdt
		$ketqua = array('mangkq'=>$ketqua);
		$this->load->view('json_view', $ketqua);
	}	

	public function deleteJson($sdt)
	{
		$dulieu = $this->json_model->getData();
		$dulieu = json_decode($dulieu);
		foreach ($dulieu as $key => $value) {
			if($value->sdt === $sdt)
			{
				unset($dulieu->$key);//xóa 1 phần từ của dãy
			}
		}
		$dulieu = json_encode($dulieu);

		
		if($this->json_model->updateData($dulieu))
		{
			$this->load->view('thongbaothanhcong');
		}
		else
		{
			echo 'xoa chua thanh cong hay xem lai code';
		}

	}
	public function themData()
	{
		$ten = $this->input->post('ten');
		$sdt = $this->input->post('sdt');
		$motcontact = array(
			'ten' => $ten,
			'sdt' => $sdt
		);
		$dulieu = $this->json_model->getData();
		$dulieu = json_decode($dulieu,true);//true trả về kiểu mảng , còn false hoặc k để gì trả về kiểu object
		// echo '<pre>';
		// var_dump($dulieu);
		// echo '</pre>';
		//thêm phần tử vào mảng
		array_push($dulieu, $motcontact);
		$dulieu = json_encode($dulieu);

		if($this->json_model->updateData($dulieu))
		{
			$this->load->view('thongbaothanhcong');
		}
		else
		{
			echo 'xoa chua thanh cong hay xem lai code';
		}
	}
	public function suaJson()
	{
		$dulieu = $this->json_model->getData();
		$dulieu = json_decode($dulieu,true);
		$dulieu = array('mangdl'=> $dulieu);
		$this->load->view('jsonEdit_view', $dulieu, FALSE);
	}
	public function editData()
	{
		$ten = $this->input->post('ten');
		$sdt = $this->input->post('sdt');

		$mangdl = array();

		for ($i = 0; $i < count($ten); $i++) {
			$dl = array(
				'ten' => $ten[$i],
				'sdt' => $sdt[$i]
			);
			array_push($mangdl, $dl);
		}

		$data = json_encode($mangdl);
		if($this->json_model->updateData($data))
		{
			$this->load->view('thongbaothanhcong');
		}
	}
	public function testOpenfile()
	{
		$this->load->view('testOpenFile_view');
	}
}
/* End of file testjson.php */
/* Location: ./application/controllers/testjson.php */