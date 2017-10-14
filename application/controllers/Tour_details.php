<?php 
/**
* 
*/
class Tour_details extends CI_Controller
{
		public function photoDashboard()
		{		

			$this->load->model("tour_model");	
			$allTour=$this->tour_model->tourname();	
			$tour_list=$this->tour_model->tourList();
		    $touritem = $this->tour_model->touritem();
		    $region_type=$this->tour_model->region_type();
		    $this->load->model("photos_model");
		    $allPhotos=$this->photos_model->allPhotos();		    

			$headerData = array(
				"pageTitle" => "photo-tour",
				"stylesheet" => array("header.css","admin.css")
			);
			$footerData = array(
				"jsFiles" => array("admin.js","photo.js","header.js")
			);
			$viewData = array(
				"viewName" => "photo-tour",
	            "viewData" => array("tour_list"=>$tour_list,"touritem"=>$touritem,"region_type"=>$region_type,"allPhotos"=>$allPhotos,"allTour"=>$allTour),
				"headerData" => $headerData,
				"footerData" => $footerData	
			);
			$this->load->view('admin-templete',$viewData);
	}
	
	public function addPhotos(){
			$this->load->model("photos_model");
			//$description =str_replace("'","\'",$_POST['description']);
			$result=array(
				"tour_id"=>$_POST['tour_id']				
			);
			$photoId=$this->photos_model->addPhotos($result);

			$detailImage=$photoId."_detailImage.".pathinfo($_FILES['photos']['name'],PATHINFO_EXTENSION);
			$updatephotos=array('photos'=>$detailImage);
			$this->photos_model->updatePhotos($updatephotos,$photoId);

			$config["upload_path"]='C:\wamp\www\Escapcity-new\html\images\Detail';
			$config["allowed_types"]='gif|png|jpg';
			$config["file_name"]=$photoId."_detailImage";
			$config["max_size"] = "500000"; 
			$config["remove_spaces"]=TRUE;
			$config["encrypt_name"]=FALSE;
			$config['overwrite']=TRUE;

			/*ini_set("post_max_size","800M");
			ini_set("upload_max_filesize","800M");
			ini_set("max_execution_time","800M");
			ini_set("post_max_size","5000");
			ini_set("memory_limit","1000M");*/

			$this->load->library('upload',$config);
			$this->upload->do_upload('photos');
	 }

	public function updatePhotos(){
		$this->load->model("photos_model");
		 $photoId=$_POST["id"];

		$result=array(
			"tour_id"=>$_POST['tour_id']			
		);

		$detailImage=$photoId."_detailImage.".pathinfo($_FILES['photos']['name'],PATHINFO_EXTENSION);

		if($_FILES['photos']['name']!=""){
			$result['photos']=$detailImage;

			$config['upload_path']='C:\wamp\www\Escapcity-new\html\images\Detail';
			$config['file_name']=$photoId."_detailImage";
			$config['allowed_types']="gif|jpg|png";
			$config['remove_spaces']=TRUE;
			$config['encrypt_name']=FALSE;
			$config['overwrite']=TRUE;
			$this->load->library("upload",$config);
			$this->upload->do_upload('photos');			
		}
		$this->photos_model->updatePhotos($result,$photoId);
		}
		public function deletePhotos($photoId){
			$this->load->model("photos_model");
			$this->photos_model->deletePhotos($photoId);
		}
		public function editPhotos($photoId){
			$this->load->model("photos_model");
			$this->load->model("Tour_model");
			$allTour=$this->Tour_model->tourname();
			$result=$this->photos_model->editPhotos($photoId);
			//var_dump($result);
			$result["allTour"]=$allTour;
			$this->load->view("updatePhotos",$result);
		}
		public function rateDashboard()
		{	

			$this->load->model("tour_model");			
			$allTour=$this->tour_model->tourname();		
			$tour_list=$this->tour_model->tourList();
		    $touritem = $this->tour_model->touritem();
		    $region_type=$this->tour_model->region_type();
		    $this->load->model("rate_model");
			$allRate=$this->rate_model->allRate();

			$headerData = array(
				"pageTitle" => "rate-tour",
				"stylesheet" => array("header.css","admin.css")
			);
			$footerData = array(
				"jsFiles" => array("admin.js","rate.js","header.js")
			);
			$viewData = array(
				"viewName" => "rate-tour",
	            "viewData" => array("tour_list"=>$tour_list,"touritem"=>$touritem,"region_type"=>$region_type,"allRate"=>$allRate,"allTour"=>$allTour),
				"headerData" => $headerData,
				"footerData" => $footerData	
			);
			$this->load->view('admin-templete',$viewData);
		}
		public function addRate(){
			$this->load->model("rate_model");
			//$detail =str_replace("'","\'",$_POST['detail']);
			$result=array(
				"tour_id"=>$_POST['tour_id'],
				"title"=>$_POST['title'],
				"detail"=>$_POST['detail']	
			);
			var_dump($result);
			$this->rate_model->addRate($result);
		}

		public function updateRate(){
			$this->load->model("rate_model");
			$id=$_POST['id'];
			$detail =str_replace("'","\'",$_POST['detail']);
			$result=array(
				"tour_id"=>$_POST['tour_id'],
				"title"=>$_POST['title'],
				"detail"=>$detail	
			);
			$this->rate_model->updateRate($result,$id);
		}
		public function deleteRate($rateId){
			$this->load->model("rate_model");
			$this->rate_model->deleteRate($rateId);
		}
		public function editRate($rateId){
			$this->load->model("Tour_model");
			$allTour=$this->Tour_model->tourname();
			$this->load->model("rate_model");
			$result=$this->rate_model->editRate($rateId);
			//var_dump($result);
			$result["allTour"]=$allTour;
			$this->load->view("updateRate",$result);
		}

		public function attractionsDashboard()
		{		

			$this->load->model("tour_model");		
			$tour_list=$this->tour_model->tourList();
		    $touritem = $this->tour_model->touritem();
		    $region_type=$this->tour_model->region_type();
		    $this->load->model("attractions_model");
		    $allTour=$this->tour_model->tourname();	
			$allAttractions=$this->attractions_model->allAttractions();

			$headerData = array(
				"pageTitle" => "attractions-tour",
				"stylesheet" => array("header.css","admin.css")
			);
			$footerData = array(
				"jsFiles" => array("admin.js","attractions.js","header.js")
			);
			$viewData = array(
				"viewName" => "attractions-tour",
	            "viewData" => array("tour_list"=>$tour_list,"touritem"=>$touritem,"region_type"=>$region_type,"allAttractions"=>$allAttractions,"allTour"=>$allTour),
				"headerData" => $headerData,
				"footerData" => $footerData	
			);
			$this->load->view('admin-templete',$viewData);
		}


		public function addAttractions(){			
			$this->load->model("attractions_model");
			$allAttractions=$this->attractions_model->allAttractions();
			$this->load->model("Tour_model");
			$allTour=$this->Tour_model->tourname();
			$this->load->model("attractions_model");
			//$detail =str_replace("'","\'",$_POST['detail']);
			$result=array(
				"tour_id"=>$_POST['tour_id'],
				"title"=>$_POST['title'],
				"details"=>$_POST['details']	
			);
			$this->attractions_model->addAttractions($result);
		}
		public function updateAttractions(){
			$id=$_POST['id'];
			$this->load->model("attractions_model");
			//$detail =str_replace("'","\'",$_POST['details']);
			$result=array(
			"tour_id"=>$_POST['tour_id'],
				"title"=>$_POST['title'],
				"details"=>$_POST['details']	
			);
			$this->attractions_model->updateAttractions($result,$id);
		}
		public function deleteAttractions($attractionsId){
			$this->load->model("attractions_model");
			$this->attractions_model->deleteAttractions($attractionsId);
		}
		public function editAttractions($attractionsId){
			$this->load->model("Tour_model");
			$allTour=$this->Tour_model->tourname();
			$this->load->model("attractions_model");
			$result=$this->attractions_model->editAttractions($attractionsId);
			$result["allTour"]=$allTour;
			//var_dump($result);
			$this->load->view("updateAttractions",$result);
		}

		public function itinraryDashboard()
		{		

			$this->load->model("tour_model");	
			$allTour=$this->tour_model->tourname();	
			$tour_list=$this->tour_model->tourList();
		    $touritem = $this->tour_model->touritem();
		    $region_type=$this->tour_model->region_type();
		    $this->load->model("itinrary_model");
		    $allItinrary=$this->itinrary_model->allItinrary();		    

			$headerData = array(
				"pageTitle" => "itinrary_tour",
				"stylesheet" => array("header.css","admin.css")
			);
			$footerData = array(
				"jsFiles" => array("admin.js","itinrary.js","header.js")
			);
			$viewData = array(
				"viewName" => "itinrary_tour",
	            "viewData" => array("tour_list"=>$tour_list,"touritem"=>$touritem,"region_type"=>$region_type,"allItinrary"=>$allItinrary,"allTour"=>$allTour),
				"headerData" => $headerData,
				"footerData" => $footerData	
			);
			$this->load->view('admin-templete',$viewData);
	}

		public function addItinrary(){
			$this->load->model("itinrary_model");
			//$detail =str_replace("'","\'",$_POST['details']);
			$result=array(
				"tour_id"=>$_POST['tour_id'],
				"date"=>$_POST['date'],
				"details"=>$_POST['details']
			);
			var_dump($result);
			$this->itinrary_model->addItinrary($result);
		}

		public function updateItinrary(){
			$itinrary_id=$_POST['id'];
			$this->load->model("itinrary_model");
			//$detail =str_replace("'","\'",$_POST['details']);
			$result=array(
				/*"tour_id"=>$_POST['tour_id'],*/
				"date"=>$_POST['date'],
				"details"=>$_POST['details']	
			);
			$this->itinrary_model->updateItinrary($result,$itinrary_id);
		}
		public function deleteItinrary($itinraryId){
			$this->load->model("itinrary_model");
			$this->itinrary_model->deleteItinrary($itinraryId);
		}
		public function editItinrary($itinraryId){
			$this->load->model("Tour_model");
			$allTour=$this->Tour_model->tourname();
			$this->load->model("itinrary_model");
			$result=$this->itinrary_model->editItinrary($itinraryId);
			$result["allTour"]=$allTour;
			//var_dump($result);
			$this->load->view("updateItinrary",$result);
		}
		public function tourByItinrary($tourId){
			$this->load->model("tour_model");
			$allTour=$this->tour_model->tourname();	
			$result=$this->tour_model->tourItinrary($tourId);			
			$this->load->view("itinrary-dashboard",array("allItinrary"=>$result,"allTour"=>$allTour));
		}
		public function tourByAttractions($tourId){
			$this->load->model("tour_model");
			$allTour=$this->tour_model->tourname();	
			$result=$this->tour_model->tourAttractions($tourId);			
			$this->load->view("attractions-dashboard",array("allAttractions"=>$result,"allTour"=>$allTour));
		}
		public function tourByRate($tourId){
			$this->load->model("tour_model");
			$allTour=$this->tour_model->tourname();	
			$this->load->model("tour_model");
			$result=$this->tour_model->tourRate($tourId);			
			$this->load->view("rate-dashboard",array("allRate"=>$result,"allTour"=>$allTour));
		}
		public function tourByPhoto($tourId){
			$this->load->model("tour_model");
			$allTour=$this->tour_model->tourname();
			$result=$this->tour_model->tourphot($tourId);			
			$this->load->view("photos-dashboard",array("allPhotos"=>$result,"allTour"=>$allTour));
		}

}
?>