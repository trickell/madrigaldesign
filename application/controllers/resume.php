<?php
    class Resume extends Controller
	{
		function __construct()
		{
			parent :: Controller();
			
			// Global Variables
			$data['meta_description'] = "
			<meta name=\"Description\" content=\"This is the online Resume of John Madrigal. John Madrigal
			is the Founder and Lead Web Developer for MadrigalDesign.com. This is his personal presence online.\">
			";
			$this->load->vars($data);
		}
		
		function index()
		{
			// DATA FOR THE PAGE
			$data['title'] = "MadrigalDesign.com : Update News : Tutorials";
			$data['header'] = "shared/header.php";
			$data['page'] = "resume/resume_view.php";
			
			$this->load->view('index_tpl', $data);
		}
	}
?>