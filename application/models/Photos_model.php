<?php 
/**
* 
*/
class Photos_model extends CI_Model
{
	
	public function addPhotos($photoData){
		$this->db->insert("photos",$photoData);
		$id=$this->db->insert_id();
		return $id;
	}
	public function updatePhotos($photoData,$photoID){
		$this->db->where("id",$photoID);
		$this->db->update("photos",$photoData);
	}
	public function deletePhotos($photoID){
		$this->db->where("id",$photoID);
		$this->db->delete("photos");
	}
	public function editPhotos($photoID){
		$query=$this->db->query("select * from photos where id='$photoID'");
		$result = $query->row_array();
		return $result;
	}
	public function allPhotos(){
		$query=$this->db->query("select * from photos");
		$result=$query->result_array();
		return $result;
	}
}

?>