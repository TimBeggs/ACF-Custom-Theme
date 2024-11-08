<?php
global $flex_content;
$label = $flex_content['label'];
$color_name = $flex_content['color_name'];
$description = $flex_content['description'];
$first_button_text = $flex_content['first_button_text'];
$first_button_link = $flex_content['first_button_link'];
$second_button_text = $flex_content['second_button_text'];
$second_button_link = $flex_content['second_button_link'];
$made_in_usa = $flex_content['made_in_usa'];
?>
<div class="product_information container container-lg stone_meta_btns">
    <div class="information">
        <?php if(!empty($label)) : ?><h3><?php echo $label; ?></h3><?php endif; ?>
        <?php if(!empty($color_name)) : ?><h1><?php echo $color_name; ?></h1><?php endif; ?>
        <?php if(!empty($description)) : ?><p><?php echo $description; ?></p><?php endif; ?>
    </div>
    <div class="made_in_usa">
        <?php if($made_in_usa == 1) :?>
			<div class="made-usa">
            	<p>Made in the USA</p>
				<img src = "<?php echo get_stylesheet_directory_uri() . '/assets/img/flag.png'; ?>">
			</div>
            
        <?php endif; ?>
        <div class="stone_btns">
            <?php if(!empty($first_button_text)) : ?><a class="primary_btn" href = "<?php if(is_array($first_button_link) == 1) : echo $first_button_link['url']; endif; ?>"><?php echo $first_button_text; ?></a><?php endif; ?>
            <?php if(!empty($second_button_text)) : ?>
                <a class="secondary_btn" href = "<?php if(is_array($second_button_link) == 1) : echo $second_button_link['url']; endif; ?>">
                    <?php echo $second_button_text; ?>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 8.00001L2 8.00002" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9.3335 3.33334L14.0002 8.00001L9.3335 12.6667" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>