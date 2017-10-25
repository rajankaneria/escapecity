<?php 
/**
* 
*/
class Testimonials extends CI_Controller
{

	public function index()
	{	
		$this->load->model("testimonial_model");	
		$testData=$this->testimonial_model->testDetails();
		$headerData = array(
			"pageTitle" => "Testimonials",
			"stylesheet" => array("admin.css","header.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js","header.js")
		);
		$viewData = array(
			"viewName" => "testimonial-dashboard",
            "viewData" => array("testData"=>$testData),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin-templete',$viewData);
	}
	public function addTest(){
		$this->load->model("testimonial_model");
		$result=array(
			"title"=>$_POST['title'],
			"details"=>$_POST['details']
		);
		$testID=$this->testimonial_model->addTest($result);

		$testImage=$testID."_testImage.".pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
		$updateData=array("image"=>$testImage);

		$this->testimonial_model->updateTest($updateData,$testID);
		$config['file_name']=$testID."_testImage";
		$config['upload_path']='C:\wamp\www\Escapcity-new\html\images\testimonials';
		$config['allowed_types']='gif|png|jpg';
		$config['overwrite']=TRUE;
		$config['remove_spaces']=TRUE;
		$config['encrypt_name']=FALSE;
		

		$this->load->library('upload',$config);
		$this->upload->do_upload('image');

	}
	public function updateTest(){
		$this->load->model("testimonial_model");
		$testID=$_POST['testID'];
		$result=array(
			"title"=>$_POST['title'],
			"details"=>$_POST['details']
		);
		$testImage=$testID."_testImage.".pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
		if($_FILES['image']['name']!=""){

			$result['image']=$testImage;
			$config['file_name']=$testID."_testImage";
			$config['upload_path']='C:\wamp\www\Escapcity-new\html\images\testimonials';
			$config['allowed_types']='gif|png|jpg';
			$config['overwrite']=TRUE;
			$config['remove_spaces']=TRUE;
			$config['encrypt_name']=FALSE;

			$this->load->library('upload',$config);
			$this->upload->do_upload('image');

				}
				$this->testimonial_model->updateTest($result,$testID);
			}

		public function deleteTest($testID){
			$this->load->model('testimonial_model');
			$this->testimonial_model->deleteTest($testID);
		}
		public function editTest($testID){
			$this->load->model('testimonial_model');
			$data=$this->testimonial_model->editTest($testID);
			$this->load->view('updateTest',$data);
		}


	















	
}
?>