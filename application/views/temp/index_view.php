<html>
	<head>
		<title>Coming Soon! MadrigalDesign.com New Design! Web Developement | Graphic Design | Free Quotes</title>
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js' type="text/javascript"></script>
		<?php echo css('temp.css'); ?>
		<?php echo css('jquery.countdown.css'); ?>
		<?php echo js('cufon/cufon.js'); ?>
		<?php echo js('cufon/fonts/ModenoLX.font.js'); ?>
		<?php echo js('jquery.countdown.min.js'); ?>
		<script type="text/javascript">
			// ***** CUFON REPLACEMENTS *******
			Cufon.replace('h1',{fontFamily: "ModenoLX"});
			
			// All My Jquery
			$(function(){
				var release = new Date(2010, 01, 27, 12, 00, 00);

				$('#countdown').countdown({until: release});
				
				if($.browser.msie){
					$("#content").addClass('msie_fix');
					$("#footer").css('margin-left','100px');
				}
			});
		</script>
	</head>
	<body>
		<div id="content">
			<?php echo img_asset('temp_site/mad_logo.png'); ?>
			<div class="box">
				<h1>Upcoming New Design In:</h1>
				<span id="countdown"></span>
				<div class="clear"></div>
				<p>
					Hi! My names John Madrigal and I like creating contagious and amazing looking
					web applications. I also design websites and have some other interesting hobbies.
					Right now, I am currently working on my new website design which will launch 
					on January 27th. <a href='http://www.madrigaldesign.com/archive'>'Visit My Old Site Here'</a>
				</p>
				<p>
					Have questions? Ideas? Comments? Are you talkative? Get a hold of me!
					<?php echo mailto('wku.madrigal@gmail.com','Click Here') ?> 
				</p>
			</div>
			<div id="footer">
				<p>Copyright &copy; 2009. MadrigalDesign.com All Rights Reserved.</p>
			</div>
		</div>
	</body>
</html>