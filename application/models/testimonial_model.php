<?php 
/**
* 
*/
class testimonial_model extends CI_Model
{
	public function testDetails(){
		$query=$this->db->query("select * from testimonial");
		$result=$query->result_array();
		return $result;
	}
	public function addTest($testData){
		$this->db->insert("testimonial",$testData);
		$id=$this->db->insert_id();
		return $id;
	}
	public function updateTest($testData,$testID){
		$this->db->where("id",$testID);
		$this->db->update("testimonial",$testData);
	}
	public function deleteTest($testID){
		$this->db->where("id",$testID);
		$this->db->delete("testimonial");
	}
	public function editTest($testID){
		$query=$this->db->query("select * from testimonial where id='$testID' ");
		$result=$query->row_array();
		return $result;
	}
	
}

?>