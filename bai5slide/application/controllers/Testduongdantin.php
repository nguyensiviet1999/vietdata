<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testduongdantin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('Testduongdantin_model');
	}

	// List all your items
	public function index( $offset = 0 )
	{
		$this->load->view('testduongdantin_view');
		$dulieutin = $this->Testduongdantin_model->get();
		echo '<ul>';
		foreach ($dulieutin as $key => $value) {
			echo "<li><a href='".base_url()."duongdanthanthien/".$value['duongdantin'].".".$value['idtin']."'>".$value['tieudetin']."</a></li>";
		}
		echo '</ul>';
	}

	public function showtin($idtin,$duongdantin)
	{
		$dieukien = array('idtin' =>$idtin);
		$dulieutin = $this->Testduongdantin_model->get($dieukien);
		echo '<pre>';
		var_dump($dulieutin);
		echo '</pre>';
	}
	// Add a new item
	public function add()
	{
		$dulieu = array(
			'tieudetin' => $this->input->post('tieudetin'),
			'duongdantin' => $this->input->post('duongdantin'),
			'noidungtin' => $this->input->post('noidungtin')
		);
		$this->Testduongdantin_model->insert($dulieu);
	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file Testduongdantin.php */
/* Location: ./application/controllers/Testduongdantin.php */
