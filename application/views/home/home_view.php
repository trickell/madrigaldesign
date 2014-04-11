<div class="content_wrap">
	<div class="light_effect">
		<?php echo img_asset('lighting.png'); ?>
	</div>
	<div class="home_message">
		<h3 class="resume" style="float: none;">Welcome To MadrigalDesign.com</h3>
		<div class="home_box">
			<div class="home_panel" style="border-left: 0px;">
				<p>
					This is the online presence for John Madrigal, a professional developer and design enthusiast
					based out of Bowling Green, KY. He has a passion for everything, and uses this site to
					show you exactly who he is. Explore the site, the blog, and even view some of his work. Take
					the time to get to know his unique personality.
				</p>
			</div>
			<div class="home_panel" style="border-right: 0px;">
				<p class="define">
					<em>(define)</em> <strong>Third Person:</strong> The third person point of view is a form 
					of storytelling in which a narrator relates all action in third person, using third person 
					pronouns such as "he" or "she." <br/>
					{ <strong>I do fit the definition.</strong> }
				</p>
				<p>
					<ul class="social_network">
						<li><?php echo anchor('http://www.facebook.com/?ref=logo#!/pages/Bowling-Green-KY/MadrigalDesigncom/326522239721', img_asset('social/fb.png'), array('target' => '_blank')); ?></li>
						<li><?php echo anchor('http://www.stumbleupon.com/submit?url=http://www.madrigaldesign.com', img_asset('social/su.png'), array('target' => '_blank')); ?></li>
						<li><?php echo anchor('http://trickell.deviantart.com/', img_asset('social/da.png'), array('target' => '_blank')); ?></li>
					</ul>
				</p>
			</div>
			<div class="clear"></div>
		</div>		
		<h3 class="resume" style="float: none;">Latest Work Entry</h3>
		<div class="home_box work_latest">
			<span>
				<?php echo anchor($work_entry->w_link, img_asset($work_entry->w_imgpath), array('target'=>'_blank')); ?>				
			</span>
			<div class="w_box">
				<h3 class="resume" style="float: none;">Overview:</h3>
				<p>
					<?php echo $work_entry->w_overview; ?>
				</p>
			</div>
			<div class="w_services">
				<ul>
					<h3 class="resume" style="float: none;">Services:</h3>
					<?php echo $work_entry->w_service; ?>
				</ul>
				<h3 class="resume" style="float: none;">Technologies:</h3>
				<p><?php echo $work_entry->w_tech; ?></p>
			</div>
			<div class="clear"></div>
		</div>
	</div>	
</div>

<script type="text/javascript">
	$(function(){
		$(".social_network li").animate({ opacity: .25 }, 100);
		$(".social_network li").hover(function(){
			$(this).stop().animate({
				opacity: 1
			}, 300);
		},
		function(){
			$(this).stop().animate({
				opacity: .25
			}, 750);
		});
	});

</script>
