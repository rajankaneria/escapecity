<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{

		$this->load->model("tour_model");
		$this->load->model("testimonial_model");
		$this->load->model("blog_model");
		//$tourDataByID = $this->tour_model->tourDetails($tourid);
		$tourDetails = $this->tour_model->tourname();
		$testDetails=$this->testimonial_model->testDetails();
		$latestBlog = $this->blog_model->latestBlog();
		
		$headerData = array(
			"pageTitle" => "Home",
			"stylesheet" => array("home.css","header.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js","header.js")
		);
		$viewData = array(
			"viewName" => "home",
            "viewData" => array("tourDetails"=>$tourDetails,"testDetails"=>$testDetails,"latestBlog"=>$latestBlog),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
