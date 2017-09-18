<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Contatc",
			"stylesheet" => array("contact.css","header.css")
		);
		$footerData = array(
			"jsFiles" => array("contact.js","header.js")
		);
		$viewData = array(
			"viewName" => "contact",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
