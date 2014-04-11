<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="../assets/css/all.css" type="text/css" media="screen" />

</head>
<body>
<div id="master_effects"></div>
<div id="logo_wrap">
	<div class="header_wrap">
		<div class="logo_box">
			<ul>
				<noscript><?php echo img_asset('mad_logo.png'); ?></noscript>
				<li class="welcome"><?php echo img_asset('mad_logo.png'); ?></li>
				<li class="work"><?php echo img_asset('logo_small.png'); ?> <h1>My Portfolio</h1></li>
				<li class="blog"><?php echo img_asset('logo_small.png'); ?> <h1>The Blog</h1></li>
				<li class="about"><?php echo img_asset('logo_small.png'); ?> <h1>About Myself</h1></li>
				<li class="resume"><?php echo img_asset('logo_small.png'); ?> <h1>Online Resume</h1></li>
				<li class="contact"><?php echo img_asset('logo_small.png'); ?> <h1>Contact Me</h1></li>
			</ul>
		</div>
		<div class="nav_box">
			<ul>
				<li class="welcome"><?php echo anchor('welcome','Home'); ?></li>
				<li class="work"><?php echo anchor('work','Work'); ?></li>
				<li class="blog"><?php echo anchor('blog','Blog'); ?></li>
			</ul>
			<ul>
				<li class="about"><?php echo anchor('about','About'); ?></li>
				<li class="resume"><?php echo anchor('resume','Online Resume'); ?></li>
				<li class="contact"><?php echo anchor('contact','Contact'); ?></li>
			</ul>
		</div>
	</div>
</div>
