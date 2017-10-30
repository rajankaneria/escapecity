<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Contact",
			"stylesheet" => array("contact.css","header.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js","header.js")
		);
		$viewData = array(
			"viewName" => "contact",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	public function insertData(){
		$data=$_POST["data"];
		$this->load->model("tour_model");
		$output=$this->tour_model->insertData($data);
		echo json_encode($output);
	}

	public function sendmail(){
		$subject = $_POST["subject"];
		$message = $_POST["message"];
		$this->load->library('email');
		$this->email->from('info@escapcity.in', 'Escape City');
		$this->email->to('rajan.kaneria@gmail.com');
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
	}
}
