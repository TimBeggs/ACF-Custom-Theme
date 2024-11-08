<?php
global $page_content;
$presses = $page_content['presses'];
?>
<?php if(is_array($presses) == 1) : ?>
    <section class="presses_container">
        <div class="container-lg container">
            <div class="presses">
                <?php foreach($presses as $press) :
                    $date = $press['date'];
                    $title = $press['title'];
                    $logo = $press['logo'];
                    $description = $press['description'];
                    $button_text = $press['button_text'];
                    $button_link = $press['button_link']; ?>
                    <div class="press">
                        <div class="quote"><h3>Press</h3></div>
                        <div class="press_content">
                            <?php if(!empty($title)) : ?><h2><?php echo $title; ?></h2><?php endif; ?>
                            <?php if(!empty($date)) : ?><p class="date"><?php echo $date; ?></p><?php endif; ?>
                            <?php if(!empty($description)) : ?><p><?php echo $description; ?></p><?php endif; ?>
                        </div>
                        <div class="flex">
                            <?php if(!empty($button_text)) : ?>
                                <a class="read_more" href = "<?php if(is_array($button_link) == 1) : echo $button_link['url']; endif; ?>">
                                    <?php echo $button_text; ?>
                                    <svg class="arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 8.00001L2 8.00002" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.3335 3.33334L14.0002 8.00001L9.3335 12.6667" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <?php endif; ?>
                            <img src="<?php print_r($logo['url']); ?>">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>