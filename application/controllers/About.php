<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "About",
			"stylesheet" => array("about.css","header.css")
		);
		$footerData = array(
			"jsFiles" => array("about.js","header.js")
		);
		$viewData = array(
			"viewName" => "about",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
