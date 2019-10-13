<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slides extends CI_Controller {//chứ cái đầu của file controller bắt buộc phải viết hoa

	public function __construct()
	{
		parent::__construct();
		$this->load->model('slides_model');
	}

	public function index()
	{
		$this->load->view('addData_View');
	}
	public function addSlide()
	{
		//lấy dữ liệu json từ database để chèn thêm vào
		$dl = $this->slides_model->getDataSlides();
		$dl = json_decode($dl,true);
		if($dl=='')
		{
			$dl = array();
		}
		//lấy dữ liêu từ view
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$button_link = $this->input->post('button_link');
		$button_text = $this->input->post('button_text');
		$slide_image = array('slide_image'=>$_FILES["slide_image"]);//lay du lieu cua slide_image
		$slide_image = $this->uploadAnh($slide_image);// truyen du lieu de upload anh va lay duong link cua anh

		$motSlideAnh = array(
			'title' => $title,
			'description' => $description,
			'button_link' => $button_link,
			'button_text' => $button_text,
			'slide_image' => $slide_image
		);
		array_push($dl, $motSlideAnh);
		$dl = json_encode($dl);
		if($this->slides_model->updateData($dl))
		{
			$this->load->view('thongbaothanhcong');
		}
		else
		{
			echo 'chua thanh cong hay xem lai code nhe';
		}
	}
	public function uploadAnh($slide_image)
	{
		//xu ly phan nhan anh avatar
		$target_dir = "fileupload/";
		$target_file = $target_dir . basename($slide_image["slide_image"]["name"]);
		// echo '<pre>';
		// var_dump($anhavatar["anhavatar"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($slide_image["slide_image"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($slide_image["slide_image"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($slide_image["slide_image"]["tmp_name"], $target_file)) {
		        echo "The file ". basename($slide_image["slide_image"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		$linkanh = base_url() . $target_file;
		return $linkanh;	
	}
}

/* End of file Slides.php */
/* Location: ./application/controllers/Slides.php */