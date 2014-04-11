<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notify {

    function __construct()
    {
    	$this->CI->load->library('email');
    }
	
	function c_email($post)
	{
		$message = $this->load->view('notify/comments', $mess, true);
		
		$this->CI->email->from('info@madrigaldesign.com', 'Madrigal Design - Comments');
		$this->CI->email->to('j@madrigaldesign.com');
		
		$this->CI->email->subject('Comment Made By'.$post['C_Name']);
		$this->CI->email->message($message);
		
		$this->CI->email->send();
	}
}

?>