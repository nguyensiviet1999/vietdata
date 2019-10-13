<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'UploadHandler.php';
class nhansu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('nhansu_model');
		$data = $this->nhansu_model->getData();
		$data = array('allNhansu' => $data);
		$this->load->view('nhansu_view', $data, FALSE);
	}
	public function addNhansu()
	{
		
		//xu ly phan nhan anh avatar
		$target_dir = "fileupload/";
		$target_file = $target_dir . basename($_FILES["anhavatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["anhavatar"]["tmp_name"]);
		    echo $_FILES["anhavatar"]["tmp_name"];
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		// if (file_exists($target_file)) {
		//     echo "Sorry, file already exists.";
		//     $uploadOk = 0;
		// }
		// Check file size
		if ($_FILES["anhavatar"]["size"] > 500000) {
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
		    if (move_uploaded_file($_FILES["anhavatar"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["anhavatar"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		$anhavatar = base_url() . $target_file;

		//lấy nhân sự từ view
		$ten = $this->input->post('ten');
		$tuoi = $this->input->post('tuoi');
		$sdt = $this->input->post('sdt');
		$sodonhang = $this->input->post('sodonhang');
		$linkfb = $this->input->post('linkfb');


		$dulieu = array(
			'ten' => $ten,
			'tuoi' => $tuoi,
			'sdt' => $sdt,
			'anhavatar' => $anhavatar,
			'linkfb' => $linkfb,
			'sodonhang' => $sodonhang,
		);

		// echo "ten la: $ten
		// tuoi: $tuoi
		// sdt: $sdt
		// linkfb: $linkfb
		// so don hang: $sodonhang";
		$this->load->model('nhansu_model');
		if($this->nhansu_model->insertData($dulieu))
			//echo 'thanh cong';
			$this->load->view('thongbaothanhcong_view');
		else
			echo 'chua thanh cong';
	}
	// public function showData()
	// {
	// 	$this->load->model('nhansu_model');
	// 	$this->db->select('*');
	// 	$data = $this->db->get('nhan_vien'); 
	// 	$data = $data->result_array();

	// 	//đổi data sang kiểu mảng để truyền vào view
	// 	$data = array('allNhansu' => $data);
	// 	//truyen vao view
	// 	$this->load->view('nhansu_view', $data, FALSE);
	// }
	public function suaNhansu($id)
	{
		$this->load->model('nhansu_model');
		$data = $this->nhansu_model->getDataById($id);
		$data = array('dataNhanVien'=>$data);
		$this->load->view('suanhanvien_view', $data, FALSE);
	}
	public function xoaNhansu($id)
	{
		$this->load->model('nhansu_model');
		if($this->nhansu_model->deleteDataById($id))
		{
			$this->load->view('thongbaothanhcong_view');
		}
		else
		{
			echo 'xoa chua thanh cong';
		}

	}
	public function updateNhansu()
	{
		//lay du lieu tu view
		$id = $this->input->post('id');
		$ten = $this->input->post('ten');
		$tuoi = $this->input->post('tuoi');
		$sdt = $this->input->post('sdt');
		$sodonhang = $this->input->post('sodonhang');
		$linkfb = $this->input->post('linkfb');
		// $test = $this->input->post('anhavatar');
		// echo $test;
		// echo "ten la: $ten
		// tuoi: $tuoi
		// sdt: $sdt
		// linkfb: $linkfb
		// so don hang: $sodonhang";
		//lay anh avatar 
		//neu k up them anh thi lay avatar 2
		//$_FILES["anhavatar"]["name"] la goi ra ten cua anh vd: abc.jpg
		if($_FILES["anhavatar"]["name"]=='')
		{
			$anhavatar = $this->input->post('anhavatar2'); //lay du lieu cua anhavatar
		}
		//neu up them anh thi lay avatar
		else{
			$anhavatar = array('anhavatar'=>$_FILES["anhavatar"]);//lay du lieu cua anhavatar
			$anhavatar = $this->uploadAnh($anhavatar);// truyen du lieu de upload anh va lay duong link cua anh
		}
		//chuyen du lieu ve mang de truyen vao trong model
		$dulieu = array(
			'id' => $id,
			'ten' => $ten,
			'tuoi' => $tuoi,
			'sdt' => $sdt,
			'anhavatar' => $anhavatar,
			'linkfb' => $linkfb,
			'sodonhang' => $sodonhang,
		);
		$this->load->model('nhansu_model');
		if($this->nhansu_model->updateDataById($id,$dulieu))
		{//echo 'thanh cong';

			$this->load->view('thongbaothanhcong_view');
			 
		}
		else
			echo 'chua thanh cong';
	}

	public function uploadAnh($anhavatar)
	{
		//xu ly phan nhan anh avatar
		$target_dir = "fileupload/";
		$target_file = $target_dir . basename($anhavatar["anhavatar"]["name"]);
		// echo '<pre>';
		// var_dump($anhavatar["anhavatar"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($anhavatar["anhavatar"]["tmp_name"]);
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
		if ($_FILES["anhavatar"]["size"] > 500000) {
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
		    if (move_uploaded_file($anhavatar["anhavatar"]["tmp_name"], $target_file)) {
		        echo "The file ". basename($anhavatar["anhavatar"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		$anhavatar = base_url() . $target_file;
		return $anhavatar;	
	}
	public function ajax_add()
	{
		$ten = $this->input->post('ten');
		$tuoi = $this->input->post('tuoi');
		$sdt = $this->input->post('sdt');
		$sodonhang = $this->input->post('sodonhang');
		$linkfb = $this->input->post('linkfb');
		$anhavatar = $this->input->post('anhavatar');

		$dulieu = array(
			'ten' => $ten,
			'tuoi' => $tuoi,
			'sdt' => $sdt,
			'anhavatar' => $anhavatar,
			'linkfb' => $linkfb,
			'sodonhang' => $sodonhang,
		);
		$this->load->model('nhansu_model');
		if ($this->nhansu_model->insertData($dulieu)) {
			echo 'thanh cong';
		}
		else{
			echo 'chua thanh cong';
		}
	}
	public function uploadfile()
	{
		$uploadfile = new UploadHandler();
	}
}

/* End of file nhansu.php */
/* Location: ./application/controllers/nhansu.php */