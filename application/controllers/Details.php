<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Details",
			"stylesheet" => array("details.css","header.css")
		);
		$footerData = array(
			"jsFiles" => array("details.js","header.js")
		);
		$viewData = array(
			"viewName" => "details",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

}
