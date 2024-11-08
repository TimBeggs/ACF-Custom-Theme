<?php
global $page_content;
$heading = $page_content['heading'];
$description = $page_content['description'];
$button_text = $page_content['button_text'];
$button_link = $page_content['button_link'];
$map = $page_content['map'];
?>
<section class="hotspot">
    <div class="container-lg container">
        <div class="map_info flex">
            <?php if(!empty($heading) || !empty($description)) : ?>
                <div class="map_desc">
					<h2><?php echo $heading; ?></h2>
					<div class="map_desc_content"><?php echo $description; ?></div>
                </div>
            <?php endif; ?>
            <?php if(!empty($button_text)): ?>
                <div class="all_locations">
                    <a class="primary_btn" href = "<?php if(is_array($button_link) == 1) : echo $button_link['url']; endif; ?>"><?php echo $button_text; ?></a>    
                </div>
            <?php endif; ?>
        </div>
        <div class="locations">
            <?php echo $map; ?>
        </div>
    </div>
</section>