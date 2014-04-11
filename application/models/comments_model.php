<?php
    class Comments_model extends Model
	{
		function __construct()
		{
			parent :: Model();
		}
		
		function get_all($bid)
		{
			$this->db->order_by('C_Date','desc');
			$query = $this->db->get_where('comments', array('B_ID' => $bid));
			
			return $query;
		}
		
		function add_post($post, $level)
		{
			$data = array(
				'B_ID' => $post['B_ID'],
				'C_User' => $post['C_Name'],
				'C_Level' => $level,
				'C_Email' => $post['C_Email'],
				'C_Site' => $post['C_Site'],
				'C_Comment' => nl2br($post['C_Comment']),
			);
			
			$this->db->insert('comments', $data);
			return true;
		}
	}
?>