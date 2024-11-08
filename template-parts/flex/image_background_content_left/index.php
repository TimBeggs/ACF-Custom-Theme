<?php
global $page_content;
$content_location = $page_content['content_location'];
$background_location = $page_content['background_location'];
$heading = $page_content['heading'];
$subheading = $page_content['subheading'];
$description = $page_content['description'];
$button_text = $page_content['button_text'];
$button_link = $page_content['button_link'];
$background_image = $page_content['background_image'];
$background_color = $page_content['background_color'];
?>
<?php if(!empty($heading) || !empty($subheading) || !empty($description) || !empty($button_text)) :?>
<section class="image_background_content_left" style="background-image:url(<?php print_r($background_image['url']); ?>); background-position: <?php echo $background_location; ?>">
    <div class="container-lg container <?php echo $content_location; ?>">
        <div class="content_left" style="background:<?php echo $background_color; ?>">
			<div class="content">
				<?php if(!empty($heading)) : ?>
					<h1><?php echo $heading; ?></h1>
				<?php endif; ?>
				<?php if(!empty($subheading)) : ?>
					<div class="subheading"><?php echo $subheading; ?></div>
				<?php endif; ?>
				<?php if(!empty($description)) : ?>
					<div class = "desc"><?php echo $description; ?></div>
				<?php endif; ?>
				<?php if(!empty($button_text)) : ?>
					<div class="button_container"><a class="primary_btn" href = "<?php echo $button_link; ?>"><?php echo $button_text; ?></a></div>
				<?php endif; ?>
			</div>
        </div>
    </div>
</section>
<?php endif; ?>
<style>
    .image_background_content_left .content_left:before {
        content: " ";
        width: 100%;
        height: 100%;
        position: absolute;
        border: solid 2px <?php echo $background_color; ?>;
        left: 2em;
        top: 2em;
		border-left: 0;
		border-top: 0;
    }
	.image_background_content_left .content_left::after {
		content: "";
		width: 100%;
		height: 25px;
		border-left: solid 2px #EBE9E3;
		position: absolute;
		bottom: -2em;
		left: 2em;
	}
	.image_background_content_left .content_left .content:after {
		content: "";
		width: 22px;
		height: 100%;
		border-top: solid 2px #EBE9E3;
		position: absolute;
		top: 2em;
		right: -2em;
	}
	.image_background_content_left .content_left .content {
		position: relative;
		z-index: 22;
		padding: 5em 2em;
	}
</style>