<?php
global $page_content;
$heading = $page_content['heading'];
$description = $page_content['description'];
$button_text = $page_content['button_text'];
$button_link = $page_content['button_link'];
$logos = $page_content['logos'];
?>
<section class="media_logos">
    <div class="container-lg container">
        <div class="media flex">
            <h3>
                <?php echo $heading; ?>
                <?php if(!empty($button_text)) : ?><a class="primary_btn on_tablet" href = "<?php echo $button_link['url']; ?>"><?php echo $button_text; ?></a><?php endif; ?>
            </h3>
            <div class = "media_desc"><?php echo $description; ?></div>
            <?php if(!empty($button_text)) : ?><a class="primary_btn" href = "<?php echo $button_link['url']; ?>"><?php echo $button_text; ?></a><?php endif; ?>
        </div>
        <?php if(is_array($logos) == 1) : ?>
            <div class="logos flex jfsb">      
                <?php foreach( $logos as $logo ): ?>    
				<div class="img">
                    <img src="<?php echo esc_url($logo['url']); ?>" />
				</div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>