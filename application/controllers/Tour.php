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
	public function all(){
		
	}
	public function add(){

		$this->load->model("tour_model");		

		//get text data which has been posted
		$map =str_replace('"','\"',$_POST['map']);
		$result=array(

			"name"=>$_POST['name'],
			"type_id"=>$_POST['type_id'],
			"region_id"=>$_POST['region_id'],
			"detail"=>$_POST['detail'],			
			"map" =>$map,
			"period_to"=>$_POST['period_to'],
			"period_from"=>$_POST['period_from'],
			"price"=>$_POST['price'],
			"location"=>$_POST['location'],
			"height"=>$_POST['height'],
			"dificulty"=>$_POST['dificulty'],
			"duration"=>$_POST['duration']


		);

		//add blog with the text data and get the blog id
		$tourID = $this->tour_model->addTour($result);

		//Define the file names with blog id with same extension which has been uploaded
		$home_banner = $tourID."_tourbanner.".pathinfo($_FILES['home_banner']['name'], PATHINFO_EXTENSION);		
		$updateData = array(
			"home_banner" => $home_banner			
		);

		// update the name of the images in the database
		$this->tour_model->updateTour($updateData,$tourID);

		//set configuration for the upload library
		$config['upload_path'] = 'C:\xampp\htdocs\Escapcity-new\html\images';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['overwrite'] = TRUE;
	    $config['encrypt_name'] = FALSE;
	    $config['remove_spaces'] = TRUE;
	    
	    //set name in the config file for the feature image
	    $config['file_name'] = $tourID."_tourbanner";
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('home_banner');
	}
	
	public function update(){
		$tourID=$_POST['tourID'];

		$this->load->model('Tour_model');

		$home_banner = $tourID."_tourbanner.".pathinfo($_FILES['home_banner']['name'], PATHINFO_EXTENSION);
		$map =str_replace('"','/"',$_POST['map']);
		$result=array(
					"name"=>$_POST['name'],
					"type_id"=>$_POST['type_id'],
					"region_id"=>$_POST['region_id'],
					"detail"=>$_POST['detail'],					
					"map"=>$map,
					"period_to"=>$_POST['period_to'],
					"period_from"=>$_POST['period_from'],					
					"price"=>$_POST['price'],
					"location"=>$_POST['location'],
					"height"=>$_POST['height'],
					"dificulty"=>$_POST['dificulty'],
					"duration"=>$_POST['duration']
									
			);
			if($_FILES['home_banner']['name']!=""){
			//if (isset($result["home_banner"]) && !empty($result["home_banner"])) {
			//if($result["home_banner"]==""){ // check if user have selected an image
				$result["home_banner"] = $home_banner;

				//set configuration for the upload library
				$config['upload_path'] = 'C:\xampp\htdocs\Escapcity-new\html\images';

			    $config['allowed_types'] = 'gif|jpg|png';
			    $config['overwrite'] = TRUE;
			    $config['encrypt_name'] = FALSE;
			    $config['remove_spaces'] = TRUE; 

			    $config['file_name'] = $tourID."_tourbanner";
			    $this->load->library('upload', $config);	
			    $this->upload->do_upload('home_banner');		    
			}
						
			$this->Tour_model->updateTour($result,$tourID);

		

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
		
	    $config['upload_path'] = 'C:\xampp\htdocs\Escapcity-new\html\images';
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
			"tour_id"=>$_POST['tour_id']
		);
		if($_FILES['banner']['name']!=""){
		$result['banner']=$bannerImage;
	    $config['upload_path'] = 'C:\xampp\htdocs\Escapcity-new\html\images';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['overwrite'] = TRUE;
	    $config['encrypt_name'] = FALSE;
	    $config['remove_spaces'] = TRUE; 
	    $config['file_name'] = $fileName;
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('banner');
		}
		$this->Tour_model->updatebanner($result,$bannerID);
	}
	public function deleteBanner($deleteID)
	{
		$this->load->model("Tour_model");
		$this->Tour_model->deletebanner($deleteID);
	}
	public function tourByMonth($month){
		$this->load->model("Tour_model");
		$tourList=$this->Tour_model->toursByMonth($month,10);
		var_dump($tourList);
	}
}
