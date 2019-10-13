<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tin_model');
	}

	public function index()
	{
		
	}
	public function danhmuctin()
	{
		$ketqua = $this->tin_model->loadDanhSach();
		$ketqua = array('dulieu'=>$ketqua);
  		$this->load->view('danhmuctin_view',$ketqua);
	}
	public function themdanhmuc()
	{
		$tendanhmuc=$this->input->post('tendanhmuc');
		if($this->tin_model->insertDanhMuc($tendanhmuc))
		{
			
		}
	}
	public function suadanhmuc($iddanhmuc)
	{
		$ketqua = $this->tin_model->getDanhMucById($iddanhmuc,'danhmuctin');
		$ketqua =array('mangkq'=>$ketqua);
		$this->load->view('suadanhmuc_view', $ketqua, FALSE);
	}
	public function editeddanhmuc()
	{
		$iddanhmuc = $this->input->post('iddanhmuc');
		$tendanhmuc = $this->input->post('tendanhmuc');
		if($this->tin_model->updateDanhMuc($iddanhmuc,$tendanhmuc))
		{
			$this->load->view('thongbaothanhcong');
		}
	}
	public function xoadanhmuc($iddanhmuc)
	{
		if ($this->tin_model->deleteDanhMucById($iddanhmuc)) {
			$this->load->view('thongbaothanhcong');
		}
	}
	public function addJquery()
	{
		$tendanhmuc = $this->input->post('tendanhmuc');
		$this->tin_model->insertDanhMuc($tendanhmuc);

		echo json_encode($this->db->insert_id());
		//echo ra để cho bên function(res) mới nhận được, và chỉ nhận kiểu json
	}
	public function quanlytin()
	{
		$danhmuc = $this->tin_model->loadDanhSach();
		$tin = $this->tin_model->loadTin();
		$ketqua = array('dulieudanhmuc'=>$danhmuc,'dulieutin'=>$tin);
		$this->load->view('quanlytin_view',$ketqua);
	}
	public function themmoitin()
	{
		$anhtin = $_FILES["anhtin"];
		$anhtin = $this->xulyUpload($anhtin);
		$tieude = $this->input->post('tieude');
		$iddanhmuc = $this->input->post('iddanhmuc');
		$noidungtin = $this->input->post('noidungtin');
		$trichdan = $this->input->post('trichdan');

		if($this->tin_model->insertTin($tieude,$iddanhmuc,$noidungtin,$anhtin,$trichdan))
		{
			$this->load->view('thongbaothanhcong');
		}
	}
	public function loadTinSua($id)
	{
		$tintucsua = $this->tin_model->getTintucById($id);
		$danhsachtin = $this->tin_model->loadDanhSach();
		$ketqua =array(
			'dulieutinsua'=>$tintucsua,
			'dulieudanhmuc'=>$danhsachtin
		);
		$this->load->view('suatin_view', $ketqua, FALSE);
	}
	public function luutindasua()
	{
		$dulieuanhtin=$_FILES["anhtin"];
		$anhtincu=$this->input->post('anhtincu');
		$anhtin=$_FILES["anhtin"]["name"];
		if($_FILES["anhtin"]["name"]=="")
		{
			$anhtin = $anhtincu;
		}
		else
		{
			$anhtin=$this->xulyUpload($dulieuanhtin);
		}
		$id = $this->input->post('id');
		$tieude = $this->input->post('tieude');
		$iddanhmuc = $this->input->post('iddanhmuc');
		$noidungtin = $this->input->post('noidungtin');
		$trichdan = $this->input->post('trichdan');
		if ($this->tin_model->updateTinById($id,$tieude,$iddanhmuc,$noidungtin,$anhtin,$trichdan)) {
			$this->load->view('thongbaothanhcong');
		}
	}
	public function xoatin($id)
	{
		if ($this->tin_model->deleteTinById($id)) {
			$this->load->view('thongbaothanhcong');
		}
	}
	public function xulyUpload($anhtin)
	{
		//xu ly phan nhan anh avatar
		$target_dir = "fileupload/";
		$target_file = $target_dir . basename($anhtin["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($anhtin["tmp_name"]);
		    //echo $_FILES["anhtin"]["tmp_name"];
		    if($check !== false) {
		        //echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        //echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		// if (file_exists($target_file)) {
		//     echo "Sorry, file already exists.";
		//     $uploadOk = 0;
		// }
		// Check file size
		if ($anhtin["size"] > 5000000) {
		    //echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		   // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    //echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($anhtin["tmp_name"], $target_file)) {
		        //echo "The file ". basename( $_FILES["anhtin"]["name"]). " has been uploaded.";
		    } else {
		        //echo "Sorry, there was an error uploading your file.";
		    }
		}
		return base_url() . $target_file;
	}
	public function quanlyJsonHeader()
	{
		$this->load->model('slides_model');
		$dlHeader = $this->slides_model->getJsonHeader();
		$dlHeader = json_decode($dlHeader,true);
		$dlHeader = array('dlJsonHeader'=>$dlHeader);
		$this->load->view('quanlyheader_view',$dlHeader);
	}
	public function updateJsonToDB()
	{
		$nam = $this->input->post('nam');
		$noidungnam = $this->input->post('noidungnam');		
		$noidungslide1 = $this->input->post('noidungslide1');
		$noidungslide2 = $this->input->post('noidungslide2');
		$noidungslide3 = $this->input->post('noidungslide3');
		$Breakfast = $this->input->post('Breakfast');
		$Brunch = $this->input->post('Brunch');
		$Lunch = $this->input->post('Lunch');
		$Dinner = $this->input->post('Dinner');
		$textdatban = $this->input->post('textdatban');
		$sdt = $this->input->post('sdt');

		$dulieulogo=$_FILES["logo"];
		$logocu=$this->input->post('logocu');
		$logo=$_FILES["logo"]["name"];
		if($_FILES["logo"]["name"]=="")
		{
			$logo = $logocu;
		}
		else
		{
			$logo=$this->xulyUpload($dulieulogo);
		}

		$dlHeader= array(
			'Welcome'=>array(
			),
			'Testimonials'=>array(
				'noidungslide1'=>$noidungslide1,
				'noidungslide2'=>$noidungslide2,
				'noidungslide3'=>$noidungslide3
			),
			'Our Services'=>array(
				'Breakfast'=>$Breakfast,
				'Brunch'=>$Brunch,
				'Lunch'=>$Lunch,
				'Dinner'=>$Dinner,
			),
			'logo'=>$logo,
			'Reservations'=>array(
				'textdatban'=>$textdatban,
				'sdt'=>$sdt
			)
		);
		for ($i = 0; $i <3 ; $i++) {
			$motcot = array(
				'nam' => $nam[$i],
				'noidungnam'=> $noidungnam[$i]
			);
			array_push($dlHeader['Welcome'], $motcot);
		}
		$dlHeader = json_encode($dlHeader);
		$this->load->model('slides_model');
		if ($this->slides_model->updateJsonHeader($dlHeader)) {
			$this->load->view('thongbaothanhcong');
		}
	}
}

/* End of file Tin.php */
/* Location: ./application/controllers/Tin.php */