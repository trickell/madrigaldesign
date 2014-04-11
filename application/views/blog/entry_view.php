<?php
	$entry = $query->row();
	$date = $entry->B_Date;
?>

<div class="content_wrap">
	<div class="grid_8">
		<div class="b_box">
			<div class="b_title">
				<div class="date">
					<span><?php echo date("M :", strtotime($date)); ?></span>
					<span><?php echo date(" d", strtotime($date)); ?></span>
				</div>
				<div class="subject">
					<h3><?php echo $entry->B_Title.br(); ?></h3>
					<?php 
						echo date("Y", strtotime($date)); ?> at <?php echo date("g:i A", strtotime($date));
						$name = $this->User_model->get_name($entry->U_ID);
						echo img_asset('post_icon.png')." Posted by ".$name;
					?>
				</div>
			</div>
			<div class="b_share social_network">
				 
				<ul>
					<li><strong>Share This Post</strong></li>
					<li><?php echo anchor('http://www.stumbleupon.com/submit?url=http://www.madrigaldesign.com/blog/entry/'.$entry->B_ID."/".preg_replace("/[^a-zA-Z0-9]/", "", $entry->B_Title), img_asset('social/su.png'), array('target' => '_blank')); ?></li>
					<li><?php echo anchor('http://www.addthis.com/bookmark.php?pub=weblogsinc&v=250&source=tbx-250&s=digg&url=http://www.madrigaldesign.com/blog/entry/'.$entry->B_ID."/".preg_replace("/[^a-zA-Z0-9]/", "", $entry->B_Title), img_asset('social/digg.png'), array('target' => '_blank')); ?></li>
					<li><?php echo anchor('http://www.addthis.com/bookmark.php?pub=weblogsinc&v=250&source=tbx-250&s=facebook&url=http://www.madrigaldesign.com/blog/entry/'.$entry->B_ID."/".preg_replace("/[^a-zA-Z0-9]/", "", $entry->B_Title), img_asset('social/fb.png'), array('target' => '_blank')); ?></li>
					<li><?php echo anchor('http://www.google.com/reader/link?url=http://www.madrigaldesign.com/blog/entry/'.$entry->B_ID."/".preg_replace("/[^a-zA-Z0-9]/", "", $entry->B_Title), img_asset('social/gb.png'), array('target' => '_blank')); ?></li>
				</ul>
			</div>
			<div class="b_body">
				<?php echo $entry->B_Entry; ?>
				<!-- This is the category and anchor for the article -->
				<div class="clear"></div>
				<p class="b_tag">
					Posted In: <?php echo anchor('', $entry->B_Tag); ?> 
				</p>
				<div class="clear"></div>
			</div>
		</div>
		<div class="b_box comments_wrap">
			<h3 class="resume">
				Comments (<?php if($comments->num_rows() > 0){ echo $comments->num_rows(); }else{ echo '0'; } ?>)
			</h3>
			<div class="clear"></div>
			<!-- Shows All Comment Boxes. -->
			<?php
				if($comments->num_rows() > 0)
				{
					foreach($comments->result() as $row):
						
					if($row->C_Level > 1){ $level = 'c_author'; } else { $level = 'c_user'; }
			?>
				<div class="c_box <?php echo $level; ?>">
					<!-- If someone has a gravatar display that image. -->
					<?php
						if($row->C_Email == ""){ echo img_asset('comment_img.png'); }
						else{ echo "<img src='http://www.gravatar.com/avatar.php?gravatar_id=".md5($row->C_Email).".jpg'"; }
					?>
					<!-- Show comment posted by that user. Check to see if user has site. -->
					<div class="inside_box">
						<div class="c_head">
							<p>
							<?php 
								if($row->C_Site == ""){ echo $row->C_User; } 
								else { echo anchor($row->C_Site ,$row->C_User, array('target'=>'_blank')); } 
							?>
							</p>
							<span><?php echo date("F j, Y @ g:i A", strtotime($row->C_Date)); ?></span>
							<div class="clear"></div>
						</div>
						
						<div class="c_body">
							<?php echo $row->C_Comment; ?>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			<?php			
					endforeach;
				}
				// If no comments are made, displays this.
				else{
			?>
					<div class="c_box" style="padding: 10px;">
						No one has spoken yet. Speak your mind! Tell us something crazy! Give us a need to
						reply. I need some entertainment for the day. Let me know something interesting.
					</div>
			<?php	}	?>
		</div>
		
		<!-- This is the comment form! -->
		<div class="b_box">
			<div class="cf_head">
				<h3 class="resume">Speak Your Mind</h3>
				<p style="float: right; margin: 20px;">
					Dont have a gravatar? <?php echo anchor('http://en.gravatar.com/','Click Here', array('target'=>'_blank')); ?>
				</p>
				<div class="clear"></div>
			</div>
			<div class="cf_left">
				<?php 
					$data = array(
						form_label('&nbsp * Name: ','C_Name').form_input('C_Name'),
						form_label('&nbsp Email (Optional for Gravatar): ','C_Email').form_input('C_Email'),
						form_label('&nbsp WebSite (Optional for Link): ','C_Site').form_input('C_Site'),
						form_textarea('C_Comment').form_input('humanoid', '', "style='visibility: hidden;'"),
						form_hidden('B_ID', $entry->B_ID).form_submit('cSubmit','Add Comment')
					);
					echo form_open('blog/add_comment');
					echo ul($data);
					echo form_close();
				?>
			</div>
			<div class="cf_right">
				
			</div>
			
		</div>
	</div>
</div>