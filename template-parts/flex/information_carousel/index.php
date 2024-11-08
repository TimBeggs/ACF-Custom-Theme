<?php
global $page_content;
$heading = $page_content['heading'];
$description = $page_content['description'];
$primary_button_link = $page_content['primary_button_link'];
$primary_button_text = $page_content['primary_button_text'];
$slides = $page_content['slides'];
?>
<section class="information_slider flex">
    <div class="sliders_info">
        <div class="content">
            <?php if(!empty($heading)) : ?><h1><?php echo $heading; ?></h1><?php endif; ?>
            <?php if(!empty($description)): ?><P><?php echo $description; ?></p><?php endif; ?>
            <div class="flex more_info">
                <?php if(!empty($primary_button_text)):?>
                <a class="primary_btn" href = "<?php if(is_array($primary_button_link) == 1) : echo $primary_button_link['url']; endif; ?>"><?php echo $primary_button_text; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if(is_array($slides) == 1) : ?>
        <div class="informations">
                <?php foreach ($slides as $key => $slide) {
                    $image = $slide['image'];?>
                    <div class="information_item">
                        <img src = "<?php print_r($image['url']); ?>" >
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
    <?php endif; ?>
</section>
