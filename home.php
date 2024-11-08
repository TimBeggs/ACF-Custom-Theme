<?php
get_header();
$cat = ( isset( $_GET['category_name'] )) ? $_GET['category_name'] : '';
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'posts_per_page'   => -1,
    'post_type'        => 'post',
);
$the_query = new WP_Query( $args );

if ($the_query->have_posts()): ?>
    <section class="blog__listings container container-main">
    <?php
    while (have_posts()): the_post();
        $postID = get_the_ID();
        $post_title = get_the_title();
        $excerpt = get_excerpt($postID, '160', false);
    ?>
    <article class="blog__listing item_1_3_gut-blog">
        <a href="<?php echo get_the_permalink(); ?>">
            <div class="post_img">
                <?php if(!empty(get_the_post_thumbnail(get_the_ID(), 'large'))) {
                    echo get_the_post_thumbnail(get_the_ID(), 'large');
                }
                else{ ?>
                <img src = "<?php echo get_stylesheet_directory_uri() . '/assets/img/post_placeholder.png'; ?>">
                <?php
                }
                ?>
            </div>
            <div class="post_meta">
                <div class="blog_cat">
                    <?php
                        $category_detail=get_the_category(get_the_ID());
                        echo $category_detail[0]->cat_name;
                    ?>
                </div>
                <h2 class="blog__listing__title"><?php echo $post_title; ?></h2>
                <p><?php echo $excerpt; ?></p>
            </div>
        </a>
    </article>
    <?php
    endwhile; ?>
    </section>
    <section>
        <?php
        echo '<div class="blog__pagination flex">';
        echo paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'end_size'     => 1,
            'mid_size'     => 4,
            'total'         => $total,
            'prev_text'    => sprintf( '	
            &#10094; %1$s', __( 'PREVIOUS', 'text-domain' ) ),
            'next_text'    => sprintf( '%1$s &#x276F;', __( 'NEXT', 'text-domain' ) ),
        ) );
        echo '</div>';
        ?>
    </section>
<?php endif; ?>
<?php
get_footer();