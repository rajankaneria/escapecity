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
	/*public function tourprice($tourID)
	{
		$query = $this->db->query("select * from price where tour_id='$tourID' ");
		$result = $query->result_array();
		return $result;
	}*/
	public function tourphot($tourID)
	{
		$query = $this->db->query("select * from  photos where tour_id='$tourID' ");
		$result = $query->result_array();
		return $result;
	}
	public function tourAttractions($tourID){
		$query=$this->db->query("select * from attractions where tour_id='$tourID'");
		$result= $query->result_array();
		return $result;
	}
	public function tourRate($tourID){
		$query=$this->db->query("select * from rate where tour_id='$tourID'");
		$result= $query->result_array();
		return $result;
	}
	public function tourList()
	{
		$query = $this->db->query("
			select tr.*,ty.tour_name as tour_type, rg.name as region_name from tours tr 
			join tour_type ty on tr.type_id = ty.t_id 
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
		$query = $this->db->query("select * from banner");
		$result = $query->result_array();
		return $result;
	}
	public function tourname()
	{
		$query = $this->db->query("select * from tours JOIN tour_type ON tour_type.t_id =tours.type_id");
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
		$query = $this->db->query("select * from  banner where id='$bannerID' ");
		$result = $query->row_array();
		return $result;
	}
	public function deletebanner($deleteID)
	{
		$this->db->where("id",$deleteID);
		$this->db->delete("banner");
	}
	public function login($data){
		$email=$data['email'];
		$password=md5($data['password']);

		$query=$this->db->query("select * from admin_login where email='$email' and password='$password' ");
		if($query->num_rows()==1){
			$check=array("status"=>"ok","message"=>"Login Successfully..");
			$this->session->set_userdata("email",$data["email"]);
		}
		else{
			$check=array("status"=>"fail","message"=>"Login fail..");
		}
		return $check;
	}
	public function forceDeleteTour($tourID){
		$this->db->query("delete from attractions where tour_id='$tourID'");
		$this->db->query("delete from photos where tour_id='$tourID'");
		$this->db->query("delete from price where tour_id='$tourID'");
		$this->db->query("delete from itinrary where tour_id='$tourID'");
		$this->db->query("delete from banner where tour_id='$tourID'");
		$this->db->query("delete from rate where tour_id='$tourID'");
		$this->db->query("delete from itinrary where tour_id='$tourID'");
		$this->db->query("delete from date where tour_id='$tourID'");
		$this->db->query("delete from tours where id='$tourID'");
	}

	public function toursByMonth($month,$count){
		$tourList = $this->tourList();
		$timestampToCompare = strtotime("1-".$month."-".date("Y"));
		$output = array();
		$tourCount = 0;
		foreach ($tourList as $key => $tourRow) {
			$toTimestamp = strtotime("1-".$tourRow["period_to"]."-".date("Y"));
			$fromTimestamp = strtotime("1-".$tourRow["period_from"]."-".date("Y"));
			if($fromTimestamp <= $timestampToCompare && $toTimestamp >= $timestampToCompare){
				$tourRow["tour_name"] = $tourRow["tour_type"];
				$output[] = $tourRow;
				$tourCount++;
			}
			if($tourCount>=$count){
				break;
			}
		}
		return $output;
	}
	public function insertData($data){
		$query=$this->db->insert("contact",$data);
		if($query){
			$check=array("status"=>"ok","message"=>"Inquiry has been sent....");
		}
		else{
			$check=array("status"=>"fail","message"=>"Inquiry has been sent fail....");
		}
		return $check;
	}	

	public  function addMonth($monthData){
		$this->db->insert("month",$monthData);
		$id=$this->db->insert_id();
		return $id;
	}
	public function updateMonth($monthData,$monthID){
		$this->db->where("id",$monthID);
		$this->db->update("month",$monthData);
	}
	public function deleteMonth($monthID){
		$this->db->where("id",$monthID);
		$this->db->delete("month");
	}
	public function editMonthDetail($monthID){
		$query=$this->db->query("select * from month where id='$monthID' ");
		$result=$query->row_array();
		return $result;

	}
	public function allMonthDetails(){
		$query=$this->db->query("select * from month");
		$result=$query->result_array();
		return $result;
	}
	public function singleMonth($month){
		$query=$this->db->query("select * from month where month='$month' ");
		$result=$query->result_array();
		return $result;
	}

		
}

	


?>

