<?php
global $page_content;
$features = $page_content['features'];
$title = $page_content['title'];
$description = $page_content['description'];
$icon_features_sub_title = $page_content['icon_features_sub_title'];
$button_text = $page_content['button_text'];
$button_link = $page_content['button_link'];
$background_color = $page_content['background_color'];
$color = $page_content['color'];
$bytes = random_bytes(10);
$section_id = bin2hex($bytes);
?>
<section class="icon_features section-<?php echo $section_id;  ?>" style = "background: <?php echo $background_color; ?>">
    <?php if (!empty($icon_features_sub_title)) :?><h4><?php echo $icon_features_sub_title; ?></h4><?php endif; ?>
    <?php if (!empty($title)) :?><h2 style="color: <?php echo $color; ?>"><?php echo $title; ?></h2><?php endif; ?>
	<div class="container container-small icon_features_desc">
		<?php echo $description; ?>
	</div>
    <div class="container-lg container icon_feature_items <?php if(count($features) == 2) { echo 'two-fts'; } elseif(count($features) == 4) { echo 'four-fts'; } elseif(count($features) == 3) { echo 'three-fts'; } ?>">
        <?php if(is_array($features) == 1) : ?>
            <?php foreach ($features as $key => $feature) {
                $feature_heading = $feature['feature_heading'];
                $feature_description = $feature['feature_description'];
                $feature_icon = $feature['feature_icon'];
                $button = $feature['button'];
		?>
                <div class="item">
                    <div class="icon" style = "background: <?php if(!empty($background_color)) {echo $background_color;} else {echo '#fff';} ?>"><img src="<?php print_r($feature_icon['url']); ?>"></div>
                    <h4 style="color: <?php echo $color; ?>"><?php echo $feature_heading; ?></h4>
                    <p style="color: <?php echo $color; ?>"><?php echo $feature_description; ?></p>
					
					<?php if( is_array($button) ) : ?>
					<div class="button">
						<a class="primary_btn" href="<?php echo $button['url']; ?>" <?php echo $button['target'] ? 'target="_blank"' : ''; ?>><?php echo $button['title']; ?></a>
					</div>
					<?php endif; ?>
					
                </div>
            <?php
            }
            ?>
        <?php endif; ?>
    </div>
    <?php if(!empty($button_text)) {?>
        <div class="learn_more">
            <a class="read_more" href = "<?php if(is_array($button_link) == 1) : echo $button_link['url']; endif; ?>">
                <?php echo $button_text; ?>
                <svg class="arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 8.00001L2 8.00002" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.3335 3.33334L14.0002 8.00001L9.3335 12.6667" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    <?php
    }
    ?>    
</section>
<style>
    .section-<?php echo $section_id;  ?> .icon_features_desc p {
        color: <?php echo $color; ?>;
    }
</style>
