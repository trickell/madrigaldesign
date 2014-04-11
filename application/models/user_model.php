<?php
    class User_model extends Model{
	
		function __construct()
		{
			parent :: Model();
		}
		
		function get_name($uid = "")
		{
			$this->db->select('U_Name');
			$data = $this->db->get_where('users', array('U_ID'=>$uid));
			$row = $data->row();
			
			return $row->U_Name;
		}
		
		function get_level($uid = "")
		{
			$this->db->select('U_Type');
			$data = $this->db->get_where('users', array('U_ID'=>$uid));
			$row = $data->row();
			
			return $row->U_Type;
		}
	}
?>