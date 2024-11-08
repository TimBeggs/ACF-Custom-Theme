<?php
global $flex_content;
$stone_images = $flex_content['stone_images'];?>
<div class="stone_images_2 product_gallery container-lg container">
	<?php 

		if(count($stone_images) > 3) :
	
	?>
		<div class="gallery_images">
			<?php
				foreach ($stone_images as $stone_image) {
					$img = $stone_image['stone_image']['sizes']['gallery-image'];
					$title = $stone_image['finish'];?>
					<div class="finish gallery_img">
						<img src = "<?php echo $img; ?>" />
						<h2><?php echo $title; ?></h2>
						<div class="flex" style = "z-index:99">
						<a class="primary_btn full finish_detail" modal="<?php echo $img; ?>">View Full Size</a>
						</div>
						<div class="title"></div>
					</div>
					<?php
				}
			?>
		</div>
		<svg class="left-slide" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M3.21998 12.8768L22.5352 12.8768" stroke="#CBCBC5" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M10.7305 20.3883L3.21901 12.8768L10.7305 5.36536" stroke="#CBCBC5" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
		</svg>
		<svg class = "right-slide" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M22.5339 12.8767L3.21875 12.8767" stroke="#CBCBC5" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M15.0234 5.36527L22.5349 12.8767L15.0234 20.3882" stroke="#CBCBC5" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
		</svg>
	<?php else : ?>
		<div class="grid_images">
			<?php
				foreach ($stone_images as $stone_image) {
					$img = $stone_image['stone_image']['sizes']['gallery-image'];
					$title = $stone_image['finish'];?>
					<div class="finish gallery_img">
						<img src = "<?php echo $img; ?>" />
						<h2><?php echo $title; ?></h2>
						<div class="flex" style = "z-index:99">
							<a class="primary_btn full finish_detail" modal="<?php echo $img; ?>">View Full Size</a>
						</div>
						<div class="title"></div>
					</div>
					<?php
				}
			?>
		</div>
	<?php endif; ?>
</div>
<div class="modal">
    <i class="fa fa-close" style="font-size:24px"></i>
    <div class="modal_body"></div>
</div>