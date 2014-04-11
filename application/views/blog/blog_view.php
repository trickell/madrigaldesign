<div class="content_wrap">
	<div class="grid_8">
		<?
                        vardump($q);
                        exit;
                        foreach($q->result() as $row):
		?>
			<div class="b_box">
				<div class="b_title">
					<div class="date">
						<span><?php echo date("G", strtotime($row->B_Date)); ?></span>
						<span><?php echo date(" d", strtotime($row->B_Date)); ?></span>
					</div>
					<div class="subject">
						<h3><?php $row->B_Title.br(); ?></h3>
						<?php 
							echo date("Y", strtotime($date)); ?> at <?php echo date("g:i A", strtotime($date));	
							echo img_asset('post_icon.png')." Posted by ".the_author_firstname();
						?>
					</div>
				</div>
				<div class="b_body">
					<?php
						// Checks string... Outputs only the first $num Words.
						$num = 40;
						$post = $row->B_Entry;
						$array = explode(" ", $post);
						
						// If Count is less output string, else use first 30 words.
						if( count($array) <= $num ){ $value = $post; }
						else{
							array_splice($array, $num);
							$value = implode(" ", $array).".....";
						}
						echo $value;
					?>
					<div class="clear"></div>
					<!-- This is the category and anchor for the article -->
					<p class="b_tag">
						Tags: <?php $row->B_Tag; ?>
					</p>
					<p class="c_tag">
						
					</p>
					<div class="clear"></div>
				</div>
			</div>
		 <? 
                        endforeach;
		?>
	</div>
	<div class="grid_4">
		
	</div>
</div>
