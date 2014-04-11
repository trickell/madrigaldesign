<?php
    class About extends Controller
	{
		function __contruct()
		{
			parent :: Controller();
			
			// Global Variables
			$data['meta_description'] = "
			<meta name=\"Description\" content=\"MadrigalDesign is a single owned web developer company and web 
			application development company in Bowling Green, Kentucky. Solutions include ecommerce, website 
			design, search engine optimization (SEO), creative design, software development, tutoring, custom  
			built computers, troubleshooting and much more.\">
			";
			$this->load->vars($data);
		}
		
		function index()
		{
			// DATA FOR THE PAGE
			$data['title'] = "About John Madrigal | Welcome To MadrigalDesign.com";
			$data['header'] = "shared/header.php";
			$data['page'] = "about/index_view.php";
			
			$data['meta_description'] = "
			<meta name=\"Description\" content=\"MadrigalDesign is a single owned web developer company and web 
			application development company in Bowling Green, Kentucky. Solutions include ecommerce, website 
			design, search engine optimization (SEO), creative design, software development, tutoring, custom  
			built computers, troubleshooting and much more.\">
			";
			
			$this->load->view('index_tpl', $data);
		}
	}
?>