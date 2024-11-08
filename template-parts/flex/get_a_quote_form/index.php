<?php
global $page_content;
$label = $page_content['label'];
$button_text = $page_content['button_text'];
$button_link = $page_content['button_link'];
$heading = $page_content['heading'];
$description = $page_content['description'];
$form = $page_content['form'];
?>
<section class="get_a_quote_container">
    <div class="flex container-main container">
        <div class = "half">
            <?php if(!empty($label)) : ?><h3><?php echo $label; ?></h3><?php endif; ?>
            <?php if(!empty($heading)) : ?><h2><?php echo $heading; ?></h2><?php endif; ?>
            <?php if(!empty($description)): ?><p><?php echo $description; ?></p><?php endif; ?>
            <?php if(!empty($button_text)): ?>
                <a class="read_more" href="<?php if(is_array($button_link) == 1) : echo $button_link['url']; endif; ?>">
                    <?php echo $button_text; ?>
                    <svg class="arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 8.00001L2 8.00002" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9.3335 3.33334L14.0002 8.00001L9.3335 12.6667" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            <?php endif; ?>
        </div>
        <div class = "half">
            <?php echo $form; ?>
        </div>
    </div>
</section>