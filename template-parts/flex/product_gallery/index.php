<?php
global $page_content;
$heading = $page_content['heading'];
$description = $page_content['description'];
$stones = $page_content['stones'];
$button_text = $page_content['button_text'];
$button_link = $page_content['button_link'];
$gallery = $page_content['gallery'];
?>
<section class="product_gallery">
    <div>
        <div class="gallery_info">
            <h2><?php echo $heading; ?></h2>
            <p><?php echo $description; ?></p>
            <?php if(!empty($button_text)) : ?>
                <div class="center"><a class="primary_btn" href = "<?php if(is_array($button_link) == 1) : echo $button_link['url']; endif; ?>"><?php echo $button_text; ?></a></div>
            <?php endif; ?>
        </div>
        <?php if(!empty($stones) || count($gallery) != 0) : ?>
        <div class = "gallery_images">
            <?php
                $args = array('post_type' => 'stones',
                    'tax_query' => array( 
                        array(
                            'taxonomy' => 'type', 
                            'field' => 'term_id',
                            'terms' => $stones
                            )
                        )
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        $postID = get_the_ID();?>
                        <div class="gallery_img">
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'gallery-image'); ?>
                            <div class="title"></div>
                            <h2><?php echo get_the_title($postID); ?></h2>
                            <div class="flex">
                                <a class="primary_btn detail" href="<?php echo get_the_permalink(); ?>">View Detail</a>
                                <a class="secondary_btn full" modal="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>">View Full Size 
                                    <svg class="arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 8.00001L2 8.00002" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.3335 3.33334L14.0002 8.00001L9.3335 12.6667" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <?php
                    }
                } 
            ?>
			<?php if( $gallery ) { foreach( $gallery as $item ){ ?>
			<div class="gallery_img">
				<img alt="" src="<?php echo $item['sizes']['large']; ?>" />
				<div class="title"></div>
                <h2><?php echo $item['caption']?></h2>
				<div class="flex">
					<a class="secondary_btn full" modal="<?php echo $item['url']; ?>">View Full Size 
						<svg class="arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14 8.00001L2 8.00002" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M9.3335 3.33334L14.0002 8.00001L9.3335 12.6667" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</a>
				</div>
			</div>
			<?php } }?>
        </div>
        <svg class="left-slide" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.21998 12.8768L22.5352 12.8768" stroke="#CBCBC5" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10.7305 20.3883L3.21901 12.8768L10.7305 5.36536" stroke="#CBCBC5" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <svg class = "right-slide" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.5339 12.8767L3.21875 12.8767" stroke="#CBCBC5" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M15.0234 5.36527L22.5349 12.8767L15.0234 20.3882" stroke="#CBCBC5" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <?php endif; ?>
    </div>
</section>
<div class="modal">
    <i class="fa fa-close" style="font-size:24px"></i>
    <div class="modal_body" style = "background-image: url('')"></div>
</div>
<?php