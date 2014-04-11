<div class="content_wrap">
    <div id="gallery_wrapper">
        <div id="thumbs">
            <div id="photoData">
                <h3></h3>
                <p>
                    Hover over an image to the right to find out more information about it. Click on the image to view a larger sized image.
                </p>
            </div>
            
            <div id="photoWrap">
            <?php foreach($photo->result() as $row): ?>
            <a class="port_thumb" data-lightbox="gallery" name="<?php echo $row->name; ?>" href="<?php echo image_asset_url('port/'.$row->link.'.jpg') ?>" title="<?php echo $row->name; ?>">
                <img src="<?php echo image_asset_url('port/thumbs/'.$row->link.'-A100x100.jpg'); ?>" alt="<?php echo $row->name; ?>" />
                <div class="caption" style="display:none;"><?php echo $row->caption; ?></div>
            </a>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>