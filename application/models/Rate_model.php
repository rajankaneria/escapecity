<?php 
/**
* 
*/
class Rate_model extends CI_Model
{
	
	public function addRate($rateData){
		$this->db->insert("rate",$rateData);
	}
	public function updateRate($rateData,$rateID){
		$this->db->where("id",$rateID);
		$this->db->update("rate",$rateData);
	}
	public function deleteRate($rateID){
		$this->db->where("id",$rateID);
		$this->db->delete("rate");
	}
	public function editRate($rateID){
		$query=$this->db->query("select * from rate where id='$rateID'");
		$result = $query->row_array();
		return $result;
	}
	public function allRate(){
		$query=$this->db->query("select * from rate");
		$result=$query->result_array();
		return $result;
	}
}

?>