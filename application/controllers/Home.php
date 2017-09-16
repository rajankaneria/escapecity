<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Home",
			"stylesheet" => array("home.css","header.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js","header.js")
		);
		$viewData = array(
			"viewName" => "home",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
