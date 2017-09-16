<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Tour extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Admin_Tour",
			"stylesheet" => array("admin_tour.css","header.css","admin.css")
		);
		$footerData = array(
			"jsFiles" => array("admin_tour.js","header.js","admin.js")
		);
		$viewData = array(
			"viewName" => "admin_tour",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
