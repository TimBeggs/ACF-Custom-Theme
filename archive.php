<?php
get_header();
if (have_posts()): ?>
    <section class="blog__listings">
        <div class="cards container-lg container">
        <?php 
        while (have_posts()): the_post();
            $postID = get_the_ID();
            $post_title = get_the_title();
        ?>        
            <div class="card_img gallery_img">
                <?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?>
                <div class="title"></div>
                <h2><?php echo $post_title; ?></h2>                    
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
        endwhile; ?>
    </div>
    </section>
<?php endif; ?>

<?php
get_footer();