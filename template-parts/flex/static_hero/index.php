<?php
global $page_content;
$heading = $page_content['heading'];
$description = $page_content['description'];
$image = $page_content['image'];
$buttons = $page_content['buttons'];
$background_position = $page_content['background_position'];
$background_overlay_color = $page_content['background_overlay_color'];
if( $background_position ) {
	$background_position_css = 'background-position: '. $background_position;
}
if( $background_overlay_color ) {
	?>
	<style>
		.static_hero {
			position: relative;
		}
		.static_hero:before {
			content: "";
			position: absolute;
			left: 0;
			top: 0;
			display: block;
			width: 100%;
			height: 100%;
			background: <?php echo $background_overlay_color; ?>;
			opacity: 0.5;
			z-index: 0;
		}
		.static_hero .container {
			position: relative;
			z-index: 2;
		}
	</style>
	<?php
}
?>

<section class="static_hero" style="background-image:url(<?php print_r($image['url']); ?>);<?php echo $background_position_css; ?>">
    <div class="slide_item">
		<div class="container-lg container static_hero-item">
			<div class="half">
				<div class="contents">
					<?php if(!empty($heading)) : ?><h1><?php echo $heading; ?></h1><?php endif; ?>
					<?php if(!empty($description)) : ?><p><?php echo $description; ?></p><?php endif; ?>
					<?php if(is_array($buttons) == 1) : ?>
						<div class="hero-bottons flex">
							<?php foreach($buttons as $key=>$button): ?>
								<?php
									$button_text = $button['button_text'];
									$button_link = $button['button_link']; ?>
								<a class="<?php echo $key == 0 ? 'primary_btn' : 'secondary_btn'; ?>" href = "<?php echo $button_link['url']; ?>">
									<?php echo $button_text; ?>
									<?php if( $key == 1 ) : ?>
									<svg class="arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14 8.00001L2 8.00002" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M9.3335 3.33334L14.0002 8.00001L9.3335 12.6667" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
									<?php endif; ?>
								</a>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
					
				</div>
			</div>
			
			<div class="mixed_bg"></div>
        </div>
		
    </div>
</section>