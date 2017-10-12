<?php 
/**
* 
*/
class Itinrary_model extends CI_Model
{
	
	public function addItinrary($itinraryData){
		$this->db->insert("itinrary",$itinraryData);
	}
	public function updateItinrary($itinraryData,$itinraryID){
		$this->db->where("id",$itinraryID);
		$this->db->update("itinrary",$itinraryData);
	}
	public function deleteItinrary($itinraryID){
		$this->db->where("id",$itinraryID);
		$this->db->delete("itinrary");
	}
	public function editItinrary($itinraryID){
		$query=$this->db->query("select * from itinrary where id='$itinraryID'");
		$result = $query->row_array();
		return $result;
	}
	public function allItinrary(){
		$query=$this->db->query("select * from itinrary");
		$result=$query->result_array();
		return $result;
	}
}

?>