<?php
global $flex_content;
$image = $flex_content['image'];
$heading = $flex_content['heading'];
$description = $flex_content['description'];
$button_text = $flex_content['button_text'];
$button_link = $flex_content['button_link'];
$checkboxes = $flex_content['checkboxes'];?>
<div class="full_image_text">
    <div class="full_img">
        <img src="<?php print_r($image['url']); ?>">
    </div>
    <div class="text_checkboxes container-lg container flex">
        <div class="textbox">
            <?php if(!empty($heading)) : ?><h2><?php echo $heading; ?></h2><?php endif; ?>
            <?php if(!empty($description)) : ?><p><?php echo $description; ?></p><?php endif; ?>
            <?php if(!empty($button_text)) : ?>
                <a class="primary_btn" href="<?php if(is_array($button_link) == 1) : echo $button_link['url']; endif; ?>"><?php echo $button_text; ?></a>
            <?php endif; ?>
        </div>
        <?php if(is_array($checkboxes) == 1) : ?>
            <div class="checkboxes">
                <?php
                    foreach ($checkboxes as $checkbox) {
                        $title = $checkbox['title'];?>
                        <div class="checkbox">
                            <img src = "<?php echo get_stylesheet_directory_uri() . '/assets/img/check.png'; ?>">
                            <p><?php echo $title; ?></p>
                        </div>
                        <?php
                    }
                ?>
            </div>
        <?php endif; ?>
    </div>
</div>