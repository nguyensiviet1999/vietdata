<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('mail/OAuth.php');
require('mail/Exception.php');
require('mail/PHPMailer.php');
require('mail/POP3.php');
require('mail/SMTP.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include 'Classes/PHPExcel/IOFactory.php';
class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('datban_model');

	}

	public function index()
	{
		$this->load->model('slides_model');
		$dlSlide = $this->slides_model->getDataSlides();
		//bien json thanh mảng
		$dlSlide = json_decode($dlSlide,true);
		//gọi đến lấy dũ liệu json text
		$dlJsonText = $this->slides_model->getJsonHeader();
		$dlJsonText = json_decode($dlJsonText,true);

		//truyền vào view sửa
		$dl = array('mangdl' => $dlSlide,'dlJsonText'=>$dlJsonText);
		$this->load->view('trangchu', $dl, FALSE);
	}
	public function datban()
	{
		//lay ve du lieu mà người dùng gửi lên server
		$tenkh = $this->input->post('tenkh');
		$email = $this->input->post('email');
		$ngay = $this->input->post('ngay');
		$gio = $this->input->post('gio');
		$gio = $ngay.' '.$gio;
		$message = $this->input->post('message');

		$data = array(
			'tenkh' => $tenkh,
			'email' => $email,
			'ngay' => $ngay,
			'gio' => $gio,
			'message' => $message
		);
		// echo '<pre>';
		// var_dump($data);
		// echo '</pre>';

		if($this->datban_model->insertData($data))
		{
			$this->load->view('thongbaothanhcong');
			//Gửi mail thông báo với chủ nhà hàng
			$mail = new PHPMailer(true);

			try {
			    //Server settings
			    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
			    $mail->isSMTP();                                            // Set mailer to use SMTP
			    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			    $mail->Username   = 'autoname1999@gmail.com';                     // SMTP username
			    $mail->Password   = 'yrcctkjpctjdfida';                               // SMTP password
			    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
			    $mail->Port       = 587;                                    // TCP port to connect to

			    //Recipients
			    
			    $mail->setFrom('Darkness@hitc.com', 'Thông báo');
			    $mail->addAddress('nguyensiviet1999@gmail.com', 'Viet');     // Add a recipient
			    // $mail->addAddress('ellen@example.com');               // Name is optional
			    // $mail->addReplyTo('info@example.com', 'Information');
			    // $mail->addCC('cc@example.com');
			    // $mail->addBCC('bcc@example.com');

			    // // Attachments
			    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

			    // Content
			    $mail->isHTML(true);                                  // Set email format to HTML
			    $mail->Subject = "Thông báo có người dùng" ;
			    $mail->Body    = 'Tên:'.$tenkh."\n".'Nội dung: '.$email."\n".$gio."\n".$message;
			   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			    $mail->CharSet = "UTF-8";
			    $mail->send();
			    
			    $this->load->view('thongbaothanhcong');

			    echo 'Message has been sent';
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		}
	}
	public function quanlyExport()
	{
		$this->load->view('quanlyExport_view');
	}
	public function exportToExcel($tablename)
	{
		$dl = $this->datban_model->getDataByTableName($tablename);
		// echo '<pre>';
		// var_dump($dl);
		// echo '</pre>';
		// die();
		$this->testExportExcel($tablename);
		$dl = array('dlExport'=>$dl);
		$this->load->view('exportToExcel_view', $dl, FALSE);
	}
	public function testExcelPHP()
	{
		$inputFileName = 'product.xlsx';
			//  Tiến hành đọc file excel
		try {
		    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
		    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
		    $objPHPExcel = $objReader->load($inputFileName);
		} catch(Exception $e) {
		    die('Lỗi không thể đọc file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
		}
		 
		//  Lấy thông tin cơ bản của file excel
		 
		// Lấy sheet hiện tại
		$sheet = $objPHPExcel->getSheet(0); 
		 
		// Lấy tổng số dòng của file, trong trường hợp này là 6 dòng
		$highestRow = $sheet->getHighestRow(); 
		 
		// Lấy tổng số cột của file, trong trường hợp này là 4 dòng
		$highestColumn = $sheet->getHighestColumn();
		 
		// Khai báo mảng $rowData chứa dữ liệu
		 
		//  Thực hiện việc lặp qua từng dòng của file, để lấy thông tin
		for ($row = 1; $row <= $highestRow; $row++){ 
		    // Lấy dữ liệu từng dòng và đưa vào mảng $rowData
		    $rowData[] = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE,FALSE);
		}
		 
		//In dữ liệu của mảng
		echo "<pre>";
		print_r($rowData);
		echo "</pre>";
	}
	public function testExportExcel($tablename)
	{

		$myfile = fopen("newfile.xlsx", "w");
		//Luôn luôn tạo mới 1 file trống để cho phần bên dưới có thể export dữ liệu vào, phần bên dưới chỉ nhận file trống
		fclose($myfile);
		//lay du lieu
		$dl = $this->datban_model->getDataByTableName($tablename);
		// Loại file cần ghi là file excel phiên bản 2007 trở đi
		$fileType = 'Excel2007';
		// Tên file cần ghi
		$fileName = 'newfile.xlsx';
		 
		// Load file testExport.xlsx lên để tiến hành ghi file
		$objPHPExcel = PHPExcel_IOFactory::load("newfile.xlsx");
		 
		// Giả sử chúng ta có mảng dữ liệu cần ghi như sau
		// $array_data = array(
		// 					0 => array('name' => 'Hieu', 'email' => 'hieu@gmail.com', 'phone' => '0123456789', 'address' => 'address 1'),
		// 					1 => array('name' => 'Nam', 'email' => 'nam@gmail.com', 'phone' => '0124567892', 'address' => 'address 2'),
		// 					2 => array('name' => 'Tuan', 'email' => 'tuan@gmail.com', 'phone' => '09764346789', 'address' => 'address 3'),
		// 					3 => array('name' => 'Mai', 'email' => 'mai@gmail.com', 'phone' => '09876543356', 'address' => 'address 4'),
		// 					4 => array('name' => 'Thao', 'email' => 'thao@gmail.com', 'phone' => '0975458979', 'address' => 'address 5'),
		// 				);
		$array_data=$dl;
		// Thiết lập tên các cột dữ liệu
		$A = 65;
		foreach ($array_data[0] as $key => $value) {
			$kitu = chr($A);// hàm chr() đổi số sang kiểu char bảng mã ACII còn hàm ord() ngược lại biến char thành số
			$objPHPExcel->setActiveSheetIndex(0)
		                            ->setCellValue( chr($A).'1', $key);//cột thứ A1, B1, C1......
		    $A++;
		}
		// $objPHPExcel->setActiveSheetIndex(0)
		//                             ->setCellValue('A1', "STT")
		//                             ->setCellValue('B1', "Name")
		//                             ->setCellValue('C1', "Email")
		//                             ->setCellValue('D1', "Phone")
		//                             ->setCellValue('E1', "Address");
		 
		// Lặp qua các dòng dữ liệu trong mảng $array_data và tiến hành ghi dữ liệu vào file excel
		$i = 2;
		$A = 65;
		foreach ($array_data as $key => $value) {
			foreach ($value as $value2) {
				$objPHPExcel->setActiveSheetIndex(0)
										->setCellValue(chr($A).$i, $value2);//tăng dần từ hàng A2,B2,C2,... hết thì đên hàng A3,B3,C3
				$A++;						
			}
			$A = 65;
			$i++;
		}
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, $fileType);
		// Tiến hành ghi file
		$objWriter->save($fileName);
	}
		
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */