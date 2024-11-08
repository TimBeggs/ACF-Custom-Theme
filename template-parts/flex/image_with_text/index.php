<?php
global $flex_content;
$promo_alignment = $flex_content['text_alignment'];
$label = $flex_content['label'];
$button_text = $flex_content['button_text'];
$button_link = $flex_content['button_link'];
$title = $flex_content['title'];
$description = $flex_content['description'];
$image = $flex_content['image'];
?>
<div class="image_with_text">
    <div class="flex container-lg container">
        <div class = "half <?php echo $promo_alignment; ?>">
            <h3><?php echo $label; ?></h3>
            <h2><?php echo $title; ?></h2>
            <p><?php echo $description; ?></p>
            <?php if(!empty($button_text)): ?>
                <a class="secondary_btn" href="<?php if(is_array($button_link) == 1) : echo $button_link['url']; endif; ?>">
                    <?php echo $button_text; ?>
                        <svg class="arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 8.00001L2 8.00002" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.3335 3.33334L14.0002 8.00001L9.3335 12.6667" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                </a>
            <?php endif; ?>
        </div>
        <div class = "half half_img">
            <img src="<?php print_r($image['url']); ?>">
        </div>
    </div>
</div>