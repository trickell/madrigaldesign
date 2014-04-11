<?php
    class Beta extends controller
	{
		function __construct()
		{
			parent :: Controller();
		}
		
		function index()
		{
			$this->load->view('temp/index_view.php');
		}

	}
?>