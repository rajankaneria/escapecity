<?php 
/**
* 
*/
class Tours extends CI_Controller
{
	
	public function index()
	{

		$this->load->model("tour_model");			
		
		$tourDetails = $this->tour_model->tourname();		
		
		$headerData = array(
			"pageTitle" => "Tours",
			"stylesheet" => array("home.css","header.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js","header.js")
		);
		$viewData = array(
			"viewName" => "tour_details",
            "viewData" => array("tourDetails"=>$tourDetails),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	
}

?>