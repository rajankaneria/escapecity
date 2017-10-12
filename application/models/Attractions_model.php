<?php 
/**
* 
*/
class Attractions_model extends CI_Model
{
	
	public function addAttractions($attractionsData){
		$this->db->insert("attractions",$attractionsData);
	}
	public function updateAttractions($attractionsData,$attractionsID){
		$this->db->where("id",$attractionsID);
		$this->db->update("attractions",$attractionsData);
	}
	public function deleteAttractions($attractionsID){
		$this->db->where("id",$attractionsID);
		$this->db->delete("attractions");
	}
	public function editAttractions($attractionsID){
		$query=$this->db->query("select * from attractions where id='$attractionsID'");
		$result = $query->row_array();
		return $result;
	}
	public function allAttractions(){
		$query=$this->db->query("select * from attractions");
		$result=$query->result_array();
		return $result;
	}
}

?>