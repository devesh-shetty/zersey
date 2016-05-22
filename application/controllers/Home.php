<?php
class Home extends CI_Controller{
	
	public function index(){
		//passing extra information to the view via second parameter to the method
		$this->load->view("home",array("page_title"=>"Online Petiton"));
	}
	
}