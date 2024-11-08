<?php
global $page_content;
$headline = $page_content['headline'];
$description = $page_content['description'];
$featured_image = $page_content['featured_image'];
$feature_items = $page_content['feature_items'];
?>
<section class="features_section">
    <div class="container-lg container flex jfsb">
        <div class="features_data">
            <?php if(!empty($headline)) : ?>
                <h2><?php echo $headline; ?></h2>
            <?php endif; ?>
            <?php if(!empty($description)) : ?>
                <p><?php echo $description; ?></p>
            <?php endif; ?>
			
			<?php if( is_array( $feature_items ) ): ?>
            <div class="featured_items item-size-<?php echo sizeof($feature_items); ?>">
                <?php foreach ($feature_items as $key => $feature_item) {
                    $feature_title = $feature_item['feature_title'];
                    $feature_description = $feature_item['feature_description'];
                    $feature_image = $feature_item['feature_image'];
                    $button_text = $feature_item['button_text'];
                    $button_link = $feature_item['button_link']; ?>
                    <div class="featured_item">
                        <?php if(!empty($feature_image)) : ?>
                            <img src = "<?php print_r($feature_image['url']); ?>">
                        <?php endif; ?>
                        <?php if(!empty($feature_title)):?>
                            <h3><?php echo $feature_title; ?></h3>
                        <?php endif; ?>
                        <?php if(!empty($feature_description)) : ?>
                            <P><?php echo $feature_description; ?></p>
                        <?php endif; ?>
                        <?php if(!empty($button_text)): ?>
                            <a class="primary_btn" href = "<?php if(is_array($button_link) == 1) : echo $button_link['url']; endif; ?>"><?php echo $button_text; ?></a>
                        <?php endif; ?>
                    </div>
                <?php
                }
                ?>
            </div>
			<?php endif; ?>
			
        </div>
        <div class="features_img">
            <img src = "<?php print_r($featured_image['url']); ?>">
        </div>
    </div>
</section>