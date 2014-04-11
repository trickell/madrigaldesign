<?php echo doctype(); ?>
<html>
	<head>
		<title>Contact Email</title>
		<style type="text/css">
			strong{
				color: #c2ec00;
			}
		</style>
	</head>
	<body>
		<div style="background-color: #111; width: 600px; padding: 20px;">
			<?php echo img_asset('mad_logo.png'); ?>
		</div>
		<div style="background-color: #510505; width: 600px; padding: 20px; color: #fff;">
			<p><strong>Name:</strong> <?php echo br().$name; ?></p>
			<p><strong>Email:</strong> <?php echo br().$email; ?></p>
			<p><strong>Website:</strong> <?php echo br().$site; ?></p>
			<p><strong>Message:</strong> <?php echo br().$message; ?></p>
		</div>
	</body>
</html>