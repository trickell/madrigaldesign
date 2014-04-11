<?php
    class Work extends Controller
	{
		function __construct()
		{
			parent :: Controller();
			
			// Global Variables
			$data['meta_description'] = "
			<meta name=\"Description\" content=\"MadrigalDesign is a single owned web developer company and web 
			application development company in Bowling Green, Kentucky. This is John Madrigal's Portfolio and
			most of the work he has done. This is his small attempt to try and impress you.\">
			";
			$this->load->vars($data);
		}
		
		function index()
		{
			// Load Models Needed
			$this->load->model('Work_model');
			
			// Query to run
			$data['work'] = $this->Work_model->get_all();
			
			// DATA FOR THE PAGE
			$data['title'] = "MadrigalDesign.com : Update News : Tutorials";
			$data['header'] = "shared/header.php";
			$data['page'] = "work/work_view.php";
			
			$this->load->view('index_tpl', $data);
		}
	}
?>