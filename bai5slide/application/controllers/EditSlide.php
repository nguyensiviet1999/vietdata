<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EditSlide extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('slides_model');
	}

	public function index()
	{
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$button_link = $this->input->post('button_link');
		$button_text = $this->input->post('button_text');

		$slide_image_old = $this->input->post('slide_image_old');
		//lấy về tất cả các ảnh r upload vào forder fileupload
		$cacanh = $_FILES['slide_image']['name'];
		$fileVatLy = $_FILES['slide_image']['tmp_name'];
		$slide_image = array();

		for ($i = 0; $i < count($cacanh); $i++) {
			if (empty($cacanh[$i])) {
				$slide_image[$i] = $slide_image_old[$i];
			}
			else
			{
				$duongdan = 'fileupload/'.$cacanh[$i];
				move_uploaded_file($fileVatLy[$i], $duongdan);
				$slide_image[$i] = base_url().'fileupload/'.$cacanh[$i];
			}
		}

		$dulieu = array();
		for ($i = 0; $i < count($title) ; $i++) {
			$motSlideAnh = array(
			'title' => $title[$i],
			'description' => $description[$i],
			'button_link' => $button_link[$i],
			'button_text' => $button_text[$i],
			'slide_image' => $slide_image[$i]
			);
			array_push($dulieu, $motSlideAnh);
		}
		$data = json_encode($dulieu);
		if($this->slides_model->updateData($data))
		{
			$this->load->view('thongbaothanhcong');
		}
		else
		{
			echo 'chua thanh cong roi! , hay xem lai code nhe';
		}
	}
	public function deleteJson($title)
	{
		$title = str_replace('%20',' ',$title);// vi khi gui qua uri thi dau cach bi bien thanh %20
		$dulieu = $this->slides_model->getDataSlides();
		$dulieu = json_decode($dulieu,true);
		foreach ($dulieu as $key => $value) {

			if($value['title'] == $title)
			{
				unset($dulieu[$key]);//xóa 1 phần từ của dãy
			}
		}
		$dulieu = json_encode($dulieu);

		
		if($this->slides_model->updateData($dulieu))
		{
			// $this->load->view('thongbaothanhcong');
			echo 'thanhcong';
		}
		else
		{
			echo 'xoa chua thanh cong hay xem lai code';
		}

	}

}

/* End of file EditSlide.php */
/* Location: ./application/controllers/EditSlide.php */
