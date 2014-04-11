<?php
    class Work_model extends Model
	{
		function __construct()
		{
			parent :: Model();
		}
		
		function get_all()
		{
			return $data = $this->db->get('work');
		}
		
		function get_latest()
		{
			$this->db->order_by('w_date','desc');
			$query = $this->db->get('work', 1);
			$row = $query->row();
			
			return $row;
		}
		
		
	}
?>