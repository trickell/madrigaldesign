<?php echo doctype(); ?>
<html>
	<head>
		<title>Comments Email</title>
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
		<p>
			Comment Was Made - Information of Comment:
		</p>
		<div style="background-color: #510505; width: 600px; padding: 20px; color: #fff;">
			<p><strong>Name:</strong> <?php echo br().$mess['user']; ?></p>
			<p><strong>Email:</strong> <?php echo br().$mess['email']; ?></p>
			<p><strong>Website:</strong> <?php echo br().$mess['site']; ?></p>
			<p><strong>Comment:</strong> <?php echo br().$mess['comment']; ?></p>
		</div>
	</body>
</html>