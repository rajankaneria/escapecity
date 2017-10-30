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
		$allMonthDetails = $this->tour_model->allMonthDetails();
		

		
		$headerData = array(
			"pageTitle" => "Tours",
			"stylesheet" => array("home.css","header.css","tourByMonth.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js","header.js")
		);
		$viewData = array(
			"viewName" => "All_tours",
            "viewData" => array("tourDetails"=>$tourDetails,"allMonthDetails"=>$allMonthDetails),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

	public function camping(){
		$this->load->model("tour_model");			
		$tourDetails = $this->tour_model->tourByType(1);	
		$allMonthDetails = $this->tour_model->allMonthDetails();
		

		
		$headerData = array(
			"pageTitle" => "Camping Tours",
			"stylesheet" => array("home.css","header.css","tourByMonth.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js","header.js")
		);
		$viewData = array(
			"viewName" => "All_tours",
            "viewData" => array("tourDetails"=>$tourDetails,"allMonthDetails"=>$allMonthDetails),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}


	public function city(){
		$this->load->model("tour_model");			
		$tourDetails = $this->tour_model->tourByType(2);	
		$allMonthDetails = $this->tour_model->allMonthDetails();
		

		
		$headerData = array(
			"pageTitle" => "City Explore Tours",
			"stylesheet" => array("home.css","header.css","tourByMonth.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js","header.js")
		);
		$viewData = array(
			"viewName" => "All_tours",
            "viewData" => array("tourDetails"=>$tourDetails,"allMonthDetails"=>$allMonthDetails),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

	public function tracking(){
		$this->load->model("tour_model");			
		$tourDetails = $this->tour_model->tourByType(3);	
		$allMonthDetails = $this->tour_model->allMonthDetails();
		

		
		$headerData = array(
			"pageTitle" => "Tracking Tours",
			"stylesheet" => array("home.css","header.css","tourByMonth.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js","header.js")
		);
		$viewData = array(
			"viewName" => "All_tours",
            "viewData" => array("tourDetails"=>$tourDetails,"allMonthDetails"=>$allMonthDetails),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

	public function adventure(){
		$this->load->model("tour_model");			
		$tourDetails = $this->tour_model->tourByType(4);	
		$allMonthDetails = $this->tour_model->allMonthDetails();
		

		
		$headerData = array(
			"pageTitle" => "Adventrue Activity Tours",
			"stylesheet" => array("home.css","header.css","tourByMonth.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js","header.js")
		);
		$viewData = array(
			"viewName" => "All_tours",
            "viewData" => array("tourDetails"=>$tourDetails,"allMonthDetails"=>$allMonthDetails),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	
}

?>