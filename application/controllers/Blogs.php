<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Blogs",
			"stylesheet" => array("home.css","header.css","blogs.css")
		);
		$footerData = array(
			"jsFiles" => array("header.js")
		);
		$viewData = array(
			"viewName" => "blogs",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
