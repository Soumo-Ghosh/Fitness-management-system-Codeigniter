<?php
class Mymodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	 function memberadd($data)
	{
		if($this->db->insert("member",$data))
			return true;
	}
	function delmember($id)
	{
		$this->db->delete("member","id=".$id);
	}
	function updo($data,$id)
	{
		$this->db->set($data);
		$this->db->where("id=",$id);
		$this->db->update('member',$data);
	}
	function addtrain($data)
	{
			if($this->db->insert("trainer",$data))
			   return true;
	}
	function deltrainer($id)
	{
		$this->db->delete("trainer","id=".$id);
	}
	function trainerupdatedo($data,$id)
	{
		$this->db->set($data);
		$this->db->where("id=",$id);
		$this->db->update('trainer',$data);
	}
	function updatedoattendence($data,$id)
	{
		$this->db->set($data);
		$this->db->where("id=",$id);
		$this->db->update('member',$data);
	}
	function memberpaymentdo($data,$id)
		{
		$this->db->set($data);
		$this->db->where("id=",$id);
		$this->db->update('member',$data);
	}
	
		
		
		
	
}
?>
		