<?php
	if($this->session->flashdata('errors'))
	{
		echo "<div class='val_error'>".$this->session->flashdata('errors')."</div>";
	}
?>

<div class="contact_wrap">
<?php
	if(!$this->session->flashdata('e_fail'))
	{
		if(!$this->session->flashdata('e_success')){
?>
	<div class="contact_info">
		<p>
			John A. Madrigal <br>
			Web Developer / Designer : Photographer : Producer  <br>
			Cookeville, TN <br><br>
			
			P: 270.404.5106 <br>
			E: <?php echo safe_mailto('j@madrigaldesign.com','j@madrigaldesign.com'); ?> <br>
                        Photography Portfolio: <?php anchor('http://500px.com/trickell', '500px');
		</p>
	</div>
	<div class="contact_form">
		<?php
			// Data for the List
			$data = array(
				form_label('* Name','name').form_input('name', $this->session->flashdata('name')),
				form_label('* Email','email').form_input('email', $this->session->flashdata('email')),
				form_label('&nbsp Website','site').form_input('site', $this->session->flashdata('site')),
				form_label('* Message','message').form_textarea('message', $this->session->flashdata('message')),
				form_label('&nbsp').form_input('humanoid', '', "style='visibility: hidden;'").form_submit('cSubmit','Send Message'),
			);
			
			// Send Data
			echo form_open('contact/email', array('id'=>'contact_form'));
			echo ul($data);
			echo form_close();
			
		} else{
			
			// Success : Checking Message Returned by Email
			if($this->session->flashdata('e_success')){
				echo $this->session->flashdata('e_success');
			}
			
		}
	} else {
		
			// Fail : Checking Message Returned by Email
			if(!$this->session->flashdata('e_success')){
				if($this->session->flashdata('e_fail')){
					echo $this->session->flashdata('e_fail');
				}
			}
	}
		?>
	</div>
</div>