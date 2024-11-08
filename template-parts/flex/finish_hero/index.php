<?php
global $page_content;
$headlines = $page_content['headlines'];
$heading = $page_content['heading'];
$sub_heading = $page_content['sub_heading'];
$description = $page_content['description'];
$image = $page_content['image'];
$buttons = $page_content['buttons'];
?>

<section class="finish_hero">
    <div class="finish_hero_container">
        <div class="finish_text half">
            <div class="contents">
                <?php if(!empty($sub_heading)) : ?><h4><?php echo $sub_heading; ?></h4><?php endif; ?>
                <?php if(!empty($heading)) : ?><h1><?php echo $heading; ?></h1><?php endif; ?>
				
                <?php if(!empty($description)) : ?><p><?php echo $description; ?></p><?php endif; ?>
                <?php if( is_array($buttons) ) : ?>
                    <div class="button_list">
                        <?php foreach($buttons as $button): ?>
                            <?php
                                $button_text = $button['button_text'];
                                $button_link = $button['button_link'];  ?>
                            <a class="primary_btn" href="<?php echo ( is_array( $button_link ) && isset( $button_link['url'] ) ) ? $button_link['url'] : ''; ?>"><?php echo $button_text; ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
				
                <?php if(is_array($headlines) == 1) : ?>
                <div class = "finish_headlines <?php if(count($headlines) >1): echo 'grid'; endif; ?>">
                    <?php foreach($headlines as $headline): ?>
                        <?php 
                            $title = $headline['title'];
                            $text = $headline['text'];
                            $img = $headline['image']; ?>
                        <div class="item">
                            <div class="icon"><img src = "<?php print_r($img['url']); ?>"></div>
                            <h4><?php echo $title; ?></h4>
                            <p><?php echo $text; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="finish_image half" style="background-image: url(<?php print_r($image['url']); ?>)">
            
        </div>
    </div>
</section>