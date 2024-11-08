<?php
global $page_content;
$heading = $page_content['heading'];
$description = $page_content['description'];
$button_text = $page_content['button_text'];
$button_link = $page_content['button_link'];
$granite = $page_content['granite'];
$show_all = $page_content['show_all'];
$limit = 1;
?>
<section class="product_cards">
    <div class="container-lg container">
        <div class="card_info flex">
            <div class = "card_desc">
                <h2><?php echo $heading; ?></h2>
                <p><?php echo $description; ?></h2>
            </div>
            <div class="card_all">
                <?php if(!empty($button_text)): ?>
                    <a class="primary_btn" href = "<?php echo $button_link['url']; ?>"><?php echo $button_text; ?></a>
                <?php endif; ?>
            </div>
        </div>
        <?php
        if($show_all == 1) {
            $limit = 50;
        }
        else {
            $limit = 9;
        }
        $args = array(
            'posts_per_page'   => $limit,
            'post_type' => 'stones',
            'tax_query' => array(
                array(
                'taxonomy' => 'type',
                'field' => 'term_id',
                'terms' => $granite
                )
            )
            );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) {
            echo '<div class="cards">';
            while ( $query->have_posts() ) {
                $query->the_post();
                $postID = get_the_ID();?>
                <div class="card_img gallery_img">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?>
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
            echo '</div>';
        } 
        ?>
    </div>
</section>
<div class="modal">
    <i class="fa fa-close" style="font-size:24px"></i>
    <div class="modal_body"></div>
</div>