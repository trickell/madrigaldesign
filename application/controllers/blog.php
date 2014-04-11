<?php
    class Blog extends Controller
	{
		function Blog()
		{
			parent :: Controller();
			
			//$this->output->enable_profiler(true);
			
			// Global Variables
			$data['meta_description'] = "
			<meta name=\"Description\" content=\"The blog at MadrigalDesign is filled with everything.
			You can find articles on Technology, Entertainment, Tutorials, Site News, and World News all from this
			blog. Its your source to keep up to date with everything and to learn more.\">
			";
			$this->load->vars($data);
		}
		
		function index()
		{
			// Include Models Needed for Blog
			$this->load->model('Blog_model');
			$this->load->model('User_model');
			$this->load->model('Comments_model');
			
			// Query Structure
			$data['q'] =  $this->Blog_model->get_all();                        
			
			// DATA FOR THE PAGE
			$data['title'] = "The Blog at MadrigalDesign.com : Update News : Tutorials : Source for Entertainment";
			$data['header'] = "shared/header.php";
			$data['page'] = "blog/blog_view.php";
			
			$this->load->view('index_tpl', $data);
		}		
	}
?>