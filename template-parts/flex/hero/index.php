<?php
global $page_content;
$slides = $page_content['slides'];
?>
<section class="hero_slider">
    <div class="slides">
        <?php foreach ($slides as $key => $slide) {
            $heading = $slide['heading'];
            $description = $slide['description'];
            $primary_button_link = $slide['primary_button_link'];
            $primary_button_text = $slide['primary_button_text'];
            $secondary_button_link = $slide['secondary_button_link'];
            $secondary_button_text = $slide['secondary_button_text'];
            $background_image = $slide['background_image'];
			$background_position = $slide['background_position'];
			$background_overlay_color = $slide['background_overlay_color'];
			if( $background_position ) {
				$background_position_css = 'background-position: '. $background_position;
			}

		?>
            <div class="slide_item slider-<?php echo $key; ?>" style="background-image:url(<?php print_r($background_image['url']); ?>);<?php echo $background_position_css; ?>">
                <div class="container-lg container">
                    <div class="half">
                        <div class="content">
                            <h1><?php echo $heading; ?></h1>
                            <P><?php echo $description; ?></p>
                            <div class="flex">
                                <?php if(!empty($primary_button_text)):?>
                                <a class="primary_btn" href = "<?php echo $primary_button_link; ?>"><?php echo $primary_button_text; ?></a>
                                <?php endif; ?>
                                <?php if(!empty($secondary_button_text)): ?>
                                <a class="secondary_btn" href = "<?php echo $secondary_button_link; ?>"><?php echo $secondary_button_text; ?>
                                    <svg class="arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 8.00001L2 8.00002" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.3335 3.33334L14.0002 8.00001L9.3335 12.6667" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="mixed_bg"></div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</section>
	<style>
<?php 
	foreach ($slides as $key => $slide) {

		$background_position = $slide['background_position'];
		$background_overlay_color = $slide['background_overlay_color'];
		if( $background_position ) {
			$background_position_css = 'background-position: '. $background_position;
		}
		if( $background_overlay_color ) {
	?>

		.hero_slider .slider-<?php echo $key; ?> {
			position: relative;
		}
		.hero_slider .slider-<?php echo $key; ?>:before {
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
		.hero_slider .slider-<?php echo $key; ?> .container {
			position: relative;
			z-index: 2;
		}
	<?php
	}
} ?>

</style>
