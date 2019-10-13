<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mangdemo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	// 	$sv[0] = "viet";
	// 	$sv[1] = "tung";
	// 	$sv[2] = "dương";

	// 	$mang2 = array("viet","trung","dung");

	// 	for ($i = 0; $i <3 ; $i++) {
	// 		echo "<pre>";
	// 		echo $mang2[$i];
	// 		echo "</pre>";
	// 	}
		// $mang3 = array("sv01"=>"viet","sv02"=>"tung","sv03"=>"dung");
		// echo $mang3['sv01'];
		// //để duyệt mảng dùng foreach
		// foreach ($mang3 as $key => $value) {
		// 	echo "<pre>";
		// 	echo "key : ".$key;
		// 	echo "</pre>";
		// 	echo "<pre>";
		// 	echo "value : ".$value;
		// 	echo "</pre>";
		// }
		$thucdon = array(
			'an sang' => array(
				'khai_vi' => array(
					'sup'=>"luon sang",
					'ruou'=>"vodka"				
				),
				'mon_chinh' => array(
					'com'=>"com rang",
					'pho'=>"pho bo"	
				),
				'trang_mieng' => array(
					'kem'=>"kem trang tien",
					'nuoc'=>"pepsi"
				)
			),
			'an trua' => array(
				'khai_vi' => array(
					'sup'=>"luon trua",
					'ruou'=>"vodka"				
				),
				'mon_chinh' => array(
					'com'=>"com rang",
					'pho'=>"pho bo"	
				),
				'trang_mieng' => array(
					'kem'=>"kem trang tien",
					'nuoc'=>"pepsi"
				)
			),
			'an chieu' => array(
				'khai_vi' => array(
					'sup'=>"luon toi",
					'ruou'=>"vodka"				
				),
				'mon_chinh' => array(
					'com'=>"com rang",
					'pho'=>"pho bo"	
				),
				'trang_mieng' => array(
					'kem'=>"kem trang tien",
					'nuoc'=>"pepsi"
				)
			)
		);
		//duyet cac phan tu trong mang thuc don
		foreach ($thucdon as $key => $value) {
			echo "key : ".$key;
			echo 'gia tri la : $value';
				foreach ($value as $key2 => $value2) {
					echo "<pre>";
					echo "key2 :".$key2;
					echo 'gia tri 2 la : $value2';
						foreach ($value2 as $key3 => $value3) {
				
							echo "key3 : ".$key3.",";
							echo " gia tri 3 la : $value3";
							
						}
					echo "</pre>";
				}
			echo "<hr>";
		}

	 }


}

/* End of file mangdemo.php */
/* Location: ./application/controllers/mangdemo.php */