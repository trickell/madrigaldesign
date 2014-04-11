<div class="content_wrap">
	<p>
		<h3 class="resume" style="float: none;">Latest Website</h3>
	</p>
	<div class="b_box w_latest">
		<?php 
			$late = $this->Work_model->get_latest();
			echo img_asset($late->w_imgpath);
		?>
		
		
		<div class="winfo_wrap">
			<div class="w_box">
				<h3 class="resume" style="float: none;">Overview:</h3>
				<p>
					<?php echo $late->w_overview; ?>
				</p>
			</div>
			<div class="w_services">
				<ul>
					<h3 class="resume" style="float: none;">Services:</h3>
					<?php echo $late->w_service; ?>
				</ul>
				<h3 class="resume" style="float: none;">Technologies:</h3>
				<p><?php echo $late->w_tech; ?></p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	
	<!-- *************************************** -->
	<!-- **** Start of the Portfolio Pieces **** -->
	<h3 class="resume" style="float: none;">Websites</h3>
	<div class="work_wrap">
		<?php foreach($work->result() as $row): ?>

		<div class="b_box w_item">
			<?php echo img_asset($row->w_imgpath); ?>
			<div class="winfo_wrap">
				<div class="w_box">
					<h3 class="resume" style="float: none;">Overview:</h3>
					<p>
						<?php echo $row->w_overview; ?>
					</p>
				</div>
				<div class="w_services">
					<ul>
						<h3 class="resume" style="float: none;">Services:</h3>
						<?php echo $row->w_service; ?>
					</ul>
					<h3 class="resume" style="float: none;">Technologies:</h3>
					<p><?php echo $row->w_tech; ?></p>
				</div>
			</div>
			<div class="clear"></div>
			<p class="w_link" align="center">
				<strong><?php echo $row->w_name; ?></strong> <?php echo anchor($row->w_link ,'Visit Website', array('target'=>'_blank')); ?>
			</p>
		</div>
	
		<?php endforeach; ?>
	</div>
</div>
