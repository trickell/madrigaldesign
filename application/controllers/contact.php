<?php
    class Contact extends Controller
	{
		function __construct()
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
                        $data['title'] = "Welcome To MadrigalDesign.com : Website Developer : Website Designer : Website Solution";
                        $data['header'] = "shared/header.php";
                        $data['page'] = "contact/contact_view.php";
                        
			$this->load->view('index_tpl', $data);
		}
		
		function email()
		{
			// Load Models Needed
			$this->load->library('form_validation');
			
			// Sets Rules for Form Validation
			$this->form_validation->set_rules('name', 'Name', 'required|xss_clean');
			$this->form_validation->set_rules('email', 'Email', 'required|xss_clean|valid_email');
			$this->form_validation->set_rules('website', 'Website', 'xss_clean');
			$this->form_validation->set_rules('message', 'Message', 'required|xss_clean');
			
			if($this->form_validation->run() == FALSE)
			{
				//Set Values
				$this->session->set_flashdata('name', $this->input->post('name'));
				$this->session->set_flashdata('email', $this->input->post('email'));
				$this->session->set_flashdata('site', $this->input->post('site'));
				$this->session->set_flashdata('message', nl2br($this->input->post('message')));
				
				$this->session->set_flashdata('errors',validation_errors());
				redirect('contact/index');
			}
			
			else{
				// Email Variables
				$data['name'] = $this->input->post('name');
				$data['email'] = $this->input->post('email');
				$data['site'] = $this->input->post('site');
				$data['message'] = nl2br($this->input->post('message'));
				
				$message = $this->load->view('contact/email', $data, true);
							
				// Load Helper
				$this->load->library('email');
				
				// Email Configuration
				$config['charset'] = 'iso-8859-1';
				$config['mailtype'] = 'html';
				$this->email->initialize($config);
				
				// Email Values
				$this->email->from('contact@madrigaldesign.com', 'Madrigal Design: Contact');
				$this->email->to('j@madrigaldesign.com');
				$this->email->subject('Email Test');
				$this->email->message($message);
				
				if($this->input->post('humanoid') == "")
				{
					if($this->email->send())
					{
						$this->session->set_flashdata("e_success", "<p class='eResult'><strong>Your message was sent successfully.</strong> <br> <em>( To close the window, click outside of it or the x on bottom right. )</em></p>");
						redirect('contact/index');
					}
					else{
						$this->session->set_flashdata("e_fail", "<p class='eResult'>There was a problem when trying to send your message. Try sending again in a minute. <br> <em>( To close the window, click outside of it or the x on bottom right. )</em></p>");
						redirect('contact/index');
					}
				}
			}
		}
	}
?>