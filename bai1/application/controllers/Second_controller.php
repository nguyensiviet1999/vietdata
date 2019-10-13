<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Second_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$sdt['danhsachsodienthoai'] = ['123123123','456456456','789789789','123456789'];
		$this->load->view('Thirst_view',$sdt);
	}
	public function ortherFunction()
	{
		echo "day la ham orderFunction";
	}

}

/* End of file Second_controller.php */
/* Location: ./application/controllers/Second_controller.php */