<?php 
/**
* 
*/
class Blog_model extends CI_Model
{
	
	public function blogDetails(){
	$query=$this->db->query("select * from blog");	
	$result=$query->result_array();
	return $result;
	}

	public function addBlog($blogData){
		$this->db->insert("blog",$blogData);
		$id=$this->db->insert_id();
		return $id;
	}

	public function updateBlog($blogData,$blogID){
		$this->db->where("id",$blogID);
		$this->db->update("blog",$blogData);
	}

	public function deleteBlog($blogID){
		$this->db->where("id",$blogID);
		$this->db->delete("blog");
	}

	public function editBlog($blogID){
		$query=$this->db->query("select * from blog where id='$blogID' ");
		$result=$query->row_array();
		return $result;
	}
}

?>