<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{		
		if(!$this->session->userdata("email"))
    	{
     		 header("Location:".base_url()."admin/login/");
    	
   		}
		$headerData = array(
			"pageTitle" => "Admin",
			"stylesheet" => array("admin.css","header.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js","header.js")
		);
		$viewData = array(
			"viewName" => "admin",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin-templete',$viewData);
	}
	public function Admin_Tour()
	{		

		$this->load->model("tour_model");		
		$tour_list=$this->tour_model->tourList();
	    $touritem = $this->tour_model->touritem();
	    $region_type=$this->tour_model->region_type();
		$headerData = array(
			"pageTitle" => "Admin_Tour",
			"stylesheet" => array("header.css","admin.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js","header.js")
		);
		$viewData = array(
			"viewName" => "admin_tour",
            "viewData" => array("tour_list"=>$tour_list,"touritem"=>$touritem,"region_type"=>$region_type),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin-templete',$viewData);
	}
	public function banner()
	{
		$this->load->model("tour_model");
		$bannerimg = $this->tour_model->banner();

		$typename = $this->tour_model->tourname();

		$headerData = array(
			"pageTitle" => "Admin_Tour",
			"stylesheet" => array("header.css","admin.css")
		);
		$footerData = array(
			"jsFiles" => array("header.js","banner.js")
		);
		$viewData = array(
			"viewName" => "banner",
            "viewData" => array("bannerimg"=>$bannerimg , "typename"=>$typename),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin-templete',$viewData);

	}
	public function bannerDetail($bannerID)
	{
		$this->load->model("tour_model");
		$bannerDetail = $this->tour_model->bannerDetail($bannerID);
		$typename = $this->tour_model->tourname();
		$bannerimg = $this->tour_model->banner();

		
		$headerData = array(
			"pageTitle" => "banner",
			"stylesheet" => array("header.css","admin.css")
		);
		$footerData = array(
			"jsFiles" => array("header.js","banner.js")
		);
		$viewData = array(
			"viewName" => "banner",
            "viewData" => array("bannerimg"=>$bannerimg , "typename"=>$typename),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$viewData = array(
			"bannerDetail"=> $bannerDetail,
			"typename"=>$typename
		);
		$this->load->view("update_banner",$viewData);

	}

	/* this function is use to add tour*/
	
	public function AddTour()
	{		
		if(!$this->session->userdata("email"))
    	{
     		 header("Location:".base_url()."admin/login/");
    	
   		}
    	
		$this->load->model("tour_model");
		$tour_list=$this->tour_model->tourList();
		$region_type=$this->tour_model->region_type();
		$headerData = array(
			"pageTitle" => "Admin_Tour",
			"stylesheet" => array("header.css","admin.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js","header.js")
		);
		$viewData = array(
			"viewName" => "admin_tour",
            "viewData" => array("tour_list"=>$tour_list,"region_type"=>$region_type),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin-templete',$viewData);
	}
	
	public function tourDetails($tourID){
		$this->load->model("tour_model");
		$tourType = $this->tour_model->touritem();
		$tourDetails = $this->tour_model->tourDetails($tourID);
		$regionType = $this->tour_model->region_type();

		$viewData = array(
			"tourDetails" => $tourDetails,
			"tourType" => $tourType,
			"regionType" => $regionType
		);
		$this->load->view("update_tour_data",$viewData);
	}
	/*public function bannerdata($bannerID)
	{
		$this->load->model("tour_model");
		$bannerdata = $this->tour_model->banner_row($bannerID);
		
	}*/
	public function login(){
		
		$headerData = array(
			"pageTitle" => "Admin Login",
			"stylesheet" => array("admin.css","header.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js","header.js")
		);
		$viewData = array(
			"viewName" => "login",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin-templete',$viewData);

	}
	public function admin_login(){
	$data=$_POST["data"];
	$this->load->model("Tour_model");
	$result=$this->Tour_model->login($data);
	echo json_encode($result);		
	}

	public function logout(){			
		$this->session->unset_userdata("email");
		$this->session->sess_destroy();
		header('location:'.base_url()."admin/login");	

	}

	public function deleteTour($tourID){
		if(!$this->session->userdata("email"))
    	{
     		 header("Location:".base_url()."admin/login/");
   		}
   		$this->load->model("tour_model");
   		$this->tour_model->forceDeleteTour($tourID);
	}

	public function Month(){
	$this->load->model("tour_model");
	$monthDetails = $this->tour_model->allMonthDetails();	
	
	$headerData = array(
		"pageTitle" => "Month",
		"stylesheet" => array("admin.css","header.css")
	);
	$footerData = array(
		"jsFiles" => array("header.js","admin.js","tinymce/jquery.tinymce.min.js")
	);
	$viewData = array(
		"viewName" => "month-dashboard",
        "viewData" => array("monthDetails"=>$monthDetails),
		"headerData" => $headerData,
		"footerData" => $footerData	
	);
	$this->load->view('admin-templete',$viewData);


	}


	public function addMonth(){
		$this->load->model("tour_model");
		//$description =str_replace("'","\'",$_POST['description']);
		$result=array(
			"month"=>$_POST['month'],
			"title"=>$_POST['title'],
			"description"=>$_POST['description']
		);
		$monthId=$this->tour_model->addMonth($result);

		$monthImage=$monthId."_monthImage.".pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
		$updateMonth=array('image'=>$monthImage);
		$this->tour_model->updateMonth($updateMonth,$monthId);

		$config["upload_path"]='C:\wamp\www\Escapcity-new\html\images\tours';
		$config["allowed_types"]='gif|png|jpg';
		$config["file_name"]=$monthId."_monthImage";
		$config["remove_spaces"]=TRUE;
		$config["encrypt_name"]=FALSE;
		$config['overwrite']=TRUE;

		$this->load->library('upload',$config);
		$this->upload->do_upload('image');
	}

	public function updateMonth(){
		$this->load->model("tour_model");
		$monthId=$_POST['month-id'];
		$result=array(
			"month"=>$_POST['month'],
			"title"=>$_POST['title'],
			"description"=>$_POST['description']
		);

		$monthImage="_monthImage.".pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);

		if($_FILES['image']['name']!=""){
			$result['image']=$monthImage;

			$config['upload_path']='C:\wamp\www\Escapcity-new\html\images\tours';
			$config['file_name']=$monthId."_monthImage";
			$config['allowed_types']="gif|jpg|png";
			$config['remove_spaces']=TRUE;
			$config['encrypt_name']=FALSE;
			$config['overwrite']=TRUE;
			$this->load->library("upload",$config);
			$this->upload->do_upload('image');			
		}
		$this->tour_model->updateMonth($result,$monthId);
		}

		public function deleteMonth($monthId){
			$this->load->model("tour_model");
			$this->tour_model->deleteMonth($monthId);
		}
		public function editMonth($monthId){
			$this->load->model("tour_model");
			$result=$this->tour_model->editMonthDetail($monthId);
			//var_dump($result);
			$this->load->view("updateMonth",$result);
		}


}