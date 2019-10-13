<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menudacap extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('menudacap_model');
		//load trên này để luôn luôn load ra trang này
	}

	public function index()
	{
		$this->load->view('menudacap_view');
	}
	public function addMenuDaCap()
	{
		$tenmenu = $this->input->post('tenmenu');
		$linkmenu = $this->input->post('linkmenu');
		$idmenucha = $this->input->post('idmenucha');
		$dulieu = array(
			'tenmenu'=>$tenmenu,
			'linkmenu'=>$linkmenu,
			'idmenucha'=>$idmenucha
		);
		$this->menudacap_model->insertMenu($dulieu);

	}
	public function xulyMenuDeQui($idmenucha = 0)
	{
		$dlMenu = $this->menudacap_model->getDataMenu();
		$menucon = array();
		foreach ($dlMenu as $key => $value) {
				if ($value['idmenucha']==$idmenucha) {
					array_push($menucon, $value);
			}		
		} 
		if ($menucon) {
			echo "<ul>";
			foreach ($menucon as $key => $value) {
				echo "<li><a href='".$value['linkmenu']."'>".$value['tenmenu']."</a>";
				$this->xulyMenuDeQui($value['idmenu']);
				echo "</li>";
			}
			echo "</ul>"; 
		}
		
	}

}

/* End of file Menudacap.php */
/* Location: ./application/controllers/Menudacap.php */