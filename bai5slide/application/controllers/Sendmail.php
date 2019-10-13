<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
require('mail/OAuth.php');
require('mail/Exception.php');
require('mail/PHPMailer.php');
require('mail/POP3.php');
require('mail/SMTP.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
		// Load Composer's autoloader

class Sendmail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('sendmail_view');
	}
	public function do_send()
	{
		//nhan ve thong tin
		$ten = $this->input->post('ten');
		$nguoinhan = $this->input->post('nguoinhan');
		$noidung = $this->input->post('noidung');

		// Instantiation and passing `true` enables exceptions
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
		    
		    $mail->setFrom('Darkness@hitc.com', $ten);
		    $mail->addAddress($nguoinhan, 'Viet');     // Add a recipient
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
		    $mail->Body    = 'Tên:'.$ten.'\n'.'Nội dung:'.$noidung;
		   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		    $mail->CharSet = "UTF-8";
		    $mail->send();
		    
		    //$this->load->view('thongbaothanhcong');

		    echo 'Message has been sent';
		} catch (Exception $e) {
		    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}

}

/* End of file Sendmail.php */
/* Location: ./application/controllers/Sendmail.php */