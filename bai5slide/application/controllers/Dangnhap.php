<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dangnhap extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dangnhap_model');
	}

	public function index()
	{
		$this->load->view('dangnhap_view');
	}

	public function dangnhap()
	{
		$email = $this->input->post('email');
		$matkhau = $this->input->post('matkhau');
		$dulieutuDB = $this->dangnhap_model->loadData();
		foreach ($dulieutuDB as $value) {
			if ($email == $value['email']) {
				$matkhautuDB = $this->dangnhap_model->getDataByEmail($email)[0]['matkhau'];
				if ($matkhau == $matkhautuDB) {
					$array = array(
						'email' => $email
					);
					
					$this->session->set_userdata( $array );
				}
			}
		}
		$this->load->view('dangnhap_view');
		
	}
	public function dangki()
	{
		$ten = $this->input->post('ten');
		$email = $this->input->post('email');
		$matkhau = $this->input->post('matkhau');

		if ($this->dangnhap_model->insertData($ten,$email,$matkhau)) {
			$this->load->view('dangnhap_view');
		}
	}
	public function quenmatkhau()
	{
		$ten = $this->input->post('ten');
		$email = $this->input->post('email');
		$matkhau = $this->input->post('matkhaumoi');
		$dulieutuDB = $this->dangnhap_model->loadData();
		foreach ($dulieutuDB as $value) {
			if ($email == $value['email']) {
				$dulieutuDB = $this->dangnhap_model->getDataByEmail($email)[0];
				$iduser = $dulieutuDB['iduser'];
				$tentuDB = $dulieutuDB['ten'];
				if ($ten == $tentuDB) {
					if ($this->dangnhap_model->updateDataByiduser($iduser,$ten,$email,$matkhau)) {
						$this->load->view('dangnhap_view');
					}
				}
				else 
					echo 'khong doi duoc mat khau moi , xem lai ten nhe';
			}
		}
	}
	public function dangxuat()
	{
		$array = array('email');
		$this->session->unset_userdata($array);
		$this->load->view('dangnhap_view');
	}
}

/* End of file Dangnhap.php */
/* Location: ./application/controllers/Dangnhap.php */