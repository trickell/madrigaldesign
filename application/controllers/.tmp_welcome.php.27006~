<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();
		
		//$this->output->enable_profiler(TRUE);
		
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
		// Load Models
		$this->load->model('Blog_model');
		$this->load->model('Work_model');
		
		// DATA FOR THE PAGE
		$data['last_entry'] = $this->Blog_model->get_last();
		$data['work_entry'] = $this->Work_model->get_latest();
		
		$data['title'] = "Welcome To MadrigalDesign.com : Website Developer : Website Designer : Website Solution";
		$data['header'] = "shared/header.php";
		$data['page'] = "home/home_view.php";
		
		$this->load->view('index_tpl', $data);
	}
	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */