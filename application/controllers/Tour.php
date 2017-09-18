<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour extends CI_Controller {


	public function id($tourid){
	
		$this->load->model("tour_model");

		$tourDetails = $this->tour_model->tourDetails($tourid);

		$tourItinrary = $this->tour_model->tourItinrary($tourid);

		$tourprice = $this->tour_model->tourRate($tourid);

		$tourphoto = $this->tour_model->tourphot($tourid);

		$tourlist = $this->tour_model->tourList($tourid);

		$tourattractions=$this->tour_model->tourAttractions($tourid);

		$headerData = array(
			"pageTitle" => "Details",
			"stylesheet" => array("details.css","header.css")
		);
		$footerData = array(
			"jsFiles" => array("details.js","header.js","admin.js","banner.js")
		);
		$viewData = array(
			"viewName" => "details",
            "viewData" => array("tourDetail"=>$tourDetails,"tourItinrary"=>$tourItinrary
            	,"tourphoto"=>$tourphoto,"tourlist"=>$tourlist,"tourattractions"=>$tourattractions,"tourprice"=>$tourprice
            	),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	public function add(){
		$this->load->model("tour_model");

		//get text data which has been bosted
		$result=array(
			"name"=>$_POST['name'],
<<<<<<< HEAD
			"type_id"=>$_POST['tourtype'],
			"region_id"=>$_POST['region_id'],
			"detail"=>$_POST['detail'],
			"map_title"=>$_POST['map_title'],
			"map"=>$_POST['map'],
			"period_to"=>$_POST['period_to'],
			"period_from"=>$_POST['period_from'],
			"price"=>$_POST['price']
=======
			"type_id"=>$_POST['tourtype']
>>>>>>> bd69f159a152ad4d1ff941d59745fceb3bdea136
		);

		//add blog with the text data and get the blog id
		$tourID = $this->tour_model->addTour($result);	
		//$this->tour_model->updateTour($updateData,$tourID);
	}
	
	public function update(){
		$tourID=$_POST['tourID'];

		$this->load->model('Tour_model');

		//$tourImage = $tourID."_tour".pathinfo($_FILES['banner']['name'],PATHINFO_EXTENSION);

<<<<<<< HEAD
		$result=array(
					"name"=>$_POST['name'],
					"type_id"=>$_POST['tourtype'],
					"region_id"=>$_POST['region_id'],
					"detail"=>$_POST['detail'],
					"map_title"=>$_POST['map_title'],
					"map"=>$_POST['map'],
					"period_to"=>$_POST['period_to'],
					"period_from"=>$_POST['period_from'],					
					"home_banner"	=>$home_banner,
					"price"=>$_POST['price']				
			);
			$this->Tour_model->updateTour($result,$tourID);


			//set configuration for the upload library
		$config['upload_path'] = 'C:\xampp\htdocs\Escapcity-new\html\images';
=======
		$result = array
	     (
			"name" =>$_POST['name'] ,
			"type_id" =>$_POST['tour-type'],
			"region_id"=>$_POST["region-type"]
			//"home_benner" =>$tourImage
		 );
	    $this->Tour_model->update($result,$tourID);
	    /*$config['upload_path'] = 'C:\xampp\htdocs\aahvanadventures\html\images\tours';
>>>>>>> bd69f159a152ad4d1ff941d59745fceb3bdea136
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['overwrite'] = TRUE;
	    $config['encrypt_name'] = FALSE;
	    $config['remove_spaces'] = TRUE; 

	    $config['file_name'] = $tourID."_benner";
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('banner');*/

	}
	
	public function deleteTour($deleteID)
	{
		$this->load->model("Tour_model");
		$this->Tour_model->deletetour($deleteID);
	}
	/*public function bannerimg($bannerID){
		$this->id($blogID);
	}*/

	public function addBanner()
	{

		$this->load->model("Tour_model");

		//Define the file names with blog id with same extension which has been uploaded
		$fileName = $_POST['tour_name']."_".time()."_banner";
		$bannerImage = $fileName.".".pathinfo($_FILES['banner']['name'], PATHINFO_EXTENSION);

		$result=array(
			"banner" => $bannerImage,
			"tour_id"=>$_POST['tour_name']
		);

		$tourid = $this->Tour_model->addbanner($result);
		
	    $config['upload_path'] = 'C:\xampp\htdocs\aahvanadventures\html\images\tours';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['overwrite'] = TRUE;
	    $config['encrypt_name'] = FALSE;
	    $config['remove_spaces'] = TRUE; 
	    $config['file_name'] = $fileName;
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('banner');

	}
	public function updateBanner()
	{
		$this->load->model('Tour_model');
		$bannerID = $_POST['bannerID'];
		//Define the file names with blog id with same extension which has been uploaded
		$fileName = $_POST['tour_id']."_".time()."_banner";
		$bannerImage = $fileName.".".pathinfo($_FILES['banner']['name'], PATHINFO_EXTENSION);

		$result=array(
			"banner" => $bannerImage,
			"tour_id"=>$_POST['tour_id']
		);

		$tourid = $this->Tour_model->updatebanner($result,$bannerID);
		
	    $config['upload_path'] = 'C:\xampp\htdocs\aahvanadventures\html\images\tours';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['overwrite'] = TRUE;
	    $config['encrypt_name'] = FALSE;
	    $config['remove_spaces'] = TRUE; 
	    $config['file_name'] = $fileName;
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('banner');
	}
	public function deleteBanner($deleteID)
	{
		$this->load->model("Tour_model");
		$this->Tour_model->deletebanner($deleteID);
	}
}
