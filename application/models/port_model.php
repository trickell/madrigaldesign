<?php
    class Port_model extends Model
	{
		function __construct()
		{
			parent :: Model();
		}
		
		function get_all()
		{
			return $data = $this->db->get('port');
		}
		
		function get_latest()
		{
			$this->db->order_by('date','desc');
			$query = $this->db->get('port', 1);
			$row = $query->row();
			
			return $row;
		}
		
		
	}
?>
