<?php
get_header();
$postID = get_the_ID();

$data = get_queried_object();
// you can find this and all other server-side markup renderering functions in ./inc/renderers.php
?>
    <header class="container container-main flex col afc jfc">
        <h2><?php echo $data->name; ?></h2>
        <div class="blog__tag_cloud flex row afc jfc"><?php wp_tag_cloud( array( 'taxonomy' => 'category' ) ); ?></div>
    </header>
    <section class="blog__listings container container-main flex row afs jfs">
    <?php 
    while (have_posts()): the_post();
        $postID = get_the_ID();
        $post_title = get_the_title();
        $excerpt = get_excerpt($postID, '160', false);
    ?>
    <article class="blog__listing categories item_1_3_gut-blog flex col afs jfs">
        <a href="<?php echo get_the_permalink(); ?>">
            <div class="flex row afc jfe blog__listing__meta">
                <div><?php echo get_the_date(); ?></div>
            </div>
            <h2 class="blog__listing__title"><?php echo $post_title; ?></h2>
            <div><?php echo $excerpt; ?></div>
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
            'mid_size'     => 1,
            'prev_text'    => sprintf( '	
            &#10094; %1$s', __( 'PREVIOUS', 'text-domain' ) ),
            'next_text'    => sprintf( '%1$s &#x276F;', __( 'NEXT', 'text-domain' ) ),
        ) );
        echo '</div>';
        ?>
    </section>
<?php
get_footer();
