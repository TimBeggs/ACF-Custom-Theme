<?php
global $page_content;
$heading = $page_content['heading'];
$description = $page_content['description'];
$primary_button_text = $page_content['primary_button_text'];
$primary_button_link = $page_content['primary_button_link'];
$secondary_button_text = $page_content['secondary_button_text'];
$secondary_button_link = $page_content['secondary_button_link'];
$background_image = $page_content['background_image'];
$background_position = $page_content['background_position'];
$background_overlay_color = $page_content['background_overlay_color'];
$opacity = $page_content['background_opacity'] * 0.1;


if( $background_position ) {
	$background_position_css = 'background-position: '. $background_position;
}
if( $background_overlay_color ) {
	?>
	<style>
		.landing_hero {
			position: relative;
		}
		.landing_hero:before {
			content: "";
			position: absolute;
			left: 0;
			top: 0;
			display: block;
			width: 100%;
			height: 100%;
			background: <?php echo $background_overlay_color; ?>;
			opacity: <?php echo $opacity; ?>;
			z-index: 0;
		}
		.landing_hero .container {
			position: relative;
			z-index: 2;
		}
	</style>
	<?php
}
?>
<section class="landing_hero" style="background-image:url(<?php print_r($background_image['url']); ?>);<?php echo $background_position_css; ?>">
    <div class="container-lg container">
        <div class="half">
            <div class="content">
                <?php if(!empty($heading)) : ?><h1><?php echo $heading; ?></h1><?php endif; ?>
                <?php if(!empty($description)) : ?><P><?php echo $description; ?></p><?php endif; ?>
                <div class="flex">
                    <?php if(!empty($primary_button_text)):?>
                        <a class="primary_btn" href = "<?php if(is_array($primary_button_link) == 1) : echo $primary_button_link['url']; endif; ?>"><?php echo $primary_button_text; ?></a>
                    <?php endif; ?>
                    <?php if(!empty($secondary_button_text)): ?>
                        <a class="secondary_btn" href = "<?php if(is_array($secondary_button_link) == 1) : echo $secondary_button_link['url']; endif; ?>">
                            <?php echo $secondary_button_text; ?>
                            <svg class="arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 8.00001L2 8.00002" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.3335 3.33334L14.0002 8.00001L9.3335 12.6667" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="top_left_border"></div>
                <div class="top_right_border"></div>
            </div>
        </div>
    </div>
</section>