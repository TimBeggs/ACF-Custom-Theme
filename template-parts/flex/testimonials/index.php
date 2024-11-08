<?php
global $page_content;
$label = $page_content['label'];
$heading = $page_content['heading'];
$description = $page_content['description'];
$testimonials = $page_content['testimonials'];
?>
<section class="testimonials_container">
    <div class="container-lg container flex">
        <div class="testimonials_info">
            <?php if(!empty($label)) : ?><h3><?php echo $label; ?></h3><?php endif; ?>
            <?php if(!empty($heading)) : ?><h1><?php echo $heading; ?></h1><?php endif; ?>
            <?php if(!empty($description)): ?><p><?php echo $description; ?></p><?php endif; ?>
        </div>
        <?php if(is_array($testimonials) == 1) : ?>
            <div class="testimonials">
                <?php foreach($testimonials as $testimonial) :
                    $name = $testimonial['name'];
                    $title = $testimonial['title'];
                    $logo = $testimonial['logo'];
                    $testimonial_content = $testimonial['testimonial'];
                    $button_text = $testimonial['button_text'];
                    $button_link = $testimonial['button_link']; ?>
                    <div class="testimonial">
                        <div class="quote"><img src = "<?php echo get_stylesheet_directory_uri() . '/assets/img/quote.png'; ?>"></div>
                        <p><?php echo $testimonial_content; ?></p>
                        <div class="testimonial_option flex">
                            <div class="testimonial_content">
                                <?php if(!empty($name)) : ?><p class="customer_name"><?php echo $name; ?></p><?php endif; ?>
                                <?php if(!empty($title)) : ?><p class="customer_title"><?php echo $title; ?></p><?php endif; ?>
                                <?php if(!empty($button_text)) : ?>
                                    <a class="read_more" href = "<?php if(is_array($button_link) == 1) : echo $button_link['url']; endif; ?>">
                                        <?php echo $button_text; ?>
                                        <svg class="arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 8.00001L2 8.00002" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.3335 3.33334L14.0002 8.00001L9.3335 12.6667" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <img src="<?php print_r($logo['url']); ?>">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>