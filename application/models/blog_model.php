<?php
class Blog_model extends Model{
	
	function __construct()
	{
		parent :: Model();
	}
	
	function get_last()
	{
		$query = $this->db->get('blog', 5);
		
		return $query;
	}
	
	function get_all()
	{
		//$this->db->order_by("B_ID", "desc"); 
		$query = $this->db->get('md_work');
		
                var_dump($query);
                exit;
                
		return $query;
	}
	
	function get_current($id)
	{
		$query = $this->db->get_where('blog', array('B_ID' => $id));
		
		return $query;
	}
	
	function insert($post)
	{
		$name = $this->session->userdata('user_info');
		$this->B_Name = $name['U_ID']; 
		$this->B_Title = $post['title'];
		$this->B_Post = $post['post'];
		$this->B_Tag = $post['tag'];
		
		$query = $this->db->insert('blog', $this);
		
		return true;
	}
	
	function delete($cid)
	{
		$this->db->delete('blog', array('B_ID' => $cid));
	}
	
}
?>