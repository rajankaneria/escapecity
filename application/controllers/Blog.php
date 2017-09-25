<?php 
/**
* 
*/
class Blog extends CI_Controller
{
	public function index()
	{	
		$this->load->model("blog_model");	
		$blogData=$this->blog_model->blogDetails();
		$headerData = array(
			"pageTitle" => "Blog",
			"stylesheet" => array("admin.css","header.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js","header.js")
		);
		$viewData = array(
			"viewName" => "blog-dashboard",
            "viewData" => array("blogData"=>$blogData),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin-templete',$viewData);
	}
	public function addBlog(){
		$this->load->model("blog_model");
		//get text data which has been posted
		$result=array(
			"title"=>$_POST['title'],
			"details"=>$_POST['details']
		);

		//add blog with the text data and get the blog id
		$blogId=$this->blog_model->addBlog($result); 

		//Define the file names with blog id with same extension which has been uploaded
		$blogImage=$blogId."_blogImage.".pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);

		// update the name of the images in the database
		$updateData=array("image"=>$blogImage);
		$this->blog_model->updateBlog($updateData,$blogId);	

	    //set configuration for the upload library	    
	    $config['upload_path']='C:\xampp\htdocs\Escapcity-new\html\images\blog';
	    $config['allowed_types']='gif|jpg|png';
	    $config['overwrite']=TRUE;
	    $config['remove_spaces']=TRUE;
	    $config['encrypt_name']=FALSE;

	    //set name in the config file for the feature image
	    $config['file_name']=$blogId."_blogImage";
	    $this->load->library('upload',$config);
	    $this->upload->do_upload('image');

	}
	public function updateBlog(){
		$blogID=$_POST['blogID'];
		$this->load->model("blog_model");

		$result=array(
			"title"=>$_POST['title'],
			"details"=>$_POST['details']			
		);
		$blogImage=$blogID."_blogImage.".pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);

		if($_FILES['image']['name']!=""){

			$result['image']=$blogImage;
			$config['upload_path']='C:\xampp\htdocs\Escapcity-new\html\images\blog';
			$config['allowed_types']='gif|png|jpg';
			$config['overwrite']=TRUE;
			$config['remove_spaces']=TRUE;
			$config['encrypt_name']=FALSE;
			$config['file_name']=$blogID."_blogImage";

			$this->load->library('upload',$config);
			$this->upload->do_upload('image');
		}
		$this->blog_model->updateBlog($result,$blogID);
	
	}
	public function deleteBlog($blogID){
		$this->load->model("blog_model");
		$this->blog_model->deleteBlog($blogID);
	}
	public function editBlog($blogID){
		$this->load->model("blog_model");
		$data=$this->blog_model->editBlog($blogID);
		$this->load->view("updateBlog",$data);
	}
}
			
	
	
	


?>