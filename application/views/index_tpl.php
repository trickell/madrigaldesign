<?php 
	echo doctype(); 
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<?php echo $meta_description; ?>
		<meta name="Keywords" content="ecommerce, technology, search engine optimization, creative design, 
			software development, website applications, tutoring, custom built computer, web design, 
			website development, troubleshooting">
		<meta name="google-site-verification" content="RRpOrusSaYLtT82DZXM25ZBmH1jzhDMDwm1lzuwsqL0" />
		
		<title><?php echo $title; ?></title>
		
		<?php 
                        echo js('jquery.js');
                
			echo css('all.css');
			echo js('cufon/cufon.js');
			echo js('cufon/fonts/Delicious_500.font.js');
			echo js('cufon/fonts/ModenoLX.font.js');
			echo js('jquery.url.packed.js');
                        echo js('lightbox.js');
			echo js('jquery.all.js');                        
		?>
	</head>
	<body class="general_view">
		<?php echo $this->load->view($header); ?>
		<div id="content" class="container_12">
			<?php echo $this->load->view($page); ?>
			<div class="clear"></div>
		</div>
		<?php echo $this->load->view('shared/footer.php'); ?>
	</body>
	
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-12172458-1");
		pageTracker._trackPageview();
		} catch(err) {}
	</script>
</html>