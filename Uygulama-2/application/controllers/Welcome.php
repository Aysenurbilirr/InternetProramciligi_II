<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function merhaba(){

		echo "Merhaba";
	}
	public function uyegetir(){
		echo "uyeler listelendi";
	}
}
