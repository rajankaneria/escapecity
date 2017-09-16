<?php 
class Tour_model extends  CI_Model{

	

	public function tourDetails($tourID)
	{
		$query = $this->db->query("select * from tours where id='$tourID'");
		$result = $query->row_array();
		return $result;
	}
	public function tourItinrary($tourID)
	{
		$query = $this->db->query("select * from itinrary where tour_id ='$tourID' ");
		$result = $query->result_array();
		return $result;
	}
	public function tourprice($tourID)
	{
		$query = $this->db->query("select * from price where tour_id='$tourID' ");
		$result = $query->result_array();
		return $result;
	}
	public function tourphot($tourID)
	{
		$query = $this->db->query("select * from  photos where tour_id='$tourID' ");
		$result = $query->result_array();
		return $result;
	}
	public function tourList()
	{
		$query = $this->db->query("
			select tr.*,ty.name as tour_type, rg.name as region_name from tours tr 
			join tour_type ty on tr.type_id = ty.id 
			join region rg on tr.region_id = rg.id 
			order by tr.id asc
		");
		$result = $query->result_array();
		return $result;
	}
	
	public function touritem()
	{
		$query = $this->db->query("select * from tour_type");
		$result = $query->result_array();
		return $result;
	}
	/* this function use to insert data in db*/
	public function addTour($tourData){
		$this->db->insert("tours",$tourData);
		$id = $this->db->insert_id();
		return $id;

	}
	public function updateTour($tourData,$tourID){
		$this->db->where("id",$tourID);
		$this->db->update("tours",$tourData);
	}
	public function update($tourData,$tourID)
	{
		$this->db->where("id",$tourID);
		$this->db->update("tours",$tourData);
	}
	public function deletetour($tourID)
	{
		$this->db->where("id",$tourID);
		$this->db->delete("tours");
	}
	public function region_type()
	{
		$query=$this->db->query("select * from region");
		$result=$query->result_array();
		return $result;
	}
	public function banner()
	{
		$query = $this->db->query("select * from banner ");
		$result = $query->result_array();
		return $result;
	}
	public function tourname()
	{
		$query = $this->db->query("select * from tours ");
		$result = $query->result_array();
		return $result;
	}
	public function addbanner($updateData)
	{
		$this->db->insert("banner",$updateData);
		$id = $this->db->insert_id();
		return $id;

	}
	public function updatebanner($updateData,$bannerID){
		$this->db->where("id",$bannerID);
		$this->db->update("banner",$updateData);

	}
	public function bannerDetail($bannerID)
	{
		$query = $this->db->query("select * from  banner where id='$bannerID'");
		$result = $query->row_array();
		return $result;
	}
	public function deletebanner($deleteID)
	{
		$this->db->where("id",$deleteID);
		$this->db->delete("banner");
	}

}
?>

