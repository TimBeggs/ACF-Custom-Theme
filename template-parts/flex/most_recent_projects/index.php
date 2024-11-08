<?php
global $page_content;
$heading = $page_content['heading'];
$button_text = $page_content['button_text'];
$button_link = $page_content['button_link'];
$post_type = $page_content['post_type'];
$overlay = $page_content['overlay'];
$category = $page_content['category'];
$number_posts = $page_content['number_posts'] ? $page_content['number_posts'] : 4;
?>
<section class="most_recent_projects_container">
    <div class="container-lg container">
        <div class="flex jfsb">
            <?php if(!empty($heading)) : ?><h2><?php echo $heading; ?></h2><?php endif; ?>
            <?php if(!empty($button_text)): ?>
                <a class="primary_btn detail" href="<?php if(is_array($button_link) == 1) : echo $button_link['url']; endif; ?>"><?php echo $button_text; ?></a>
            <?php endif; ?>
        </div>
        <?php        
        $args = array(
            'posts_per_page'   => $number_posts,
            'post_type' => $post_type,
            'tax_query' => array(
                array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $category
                )
            )
        );
        if(is_bool($category) == 1) {
            $args = array(
                'posts_per_page'   => $number_posts,
                'post_type' => $post_type
            );
        }
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) { ?>
            <div class="recent_projects <?php if($query->post_count == 1) { echo 'single'; } elseif($query->post_count == 3) { echo 'grid-three'; } ?>">
            <?php
            while ( $query->have_posts() ) {
                $query->the_post();
                $postID = get_the_ID();
                $feat_image = wp_get_attachment_url( get_post_thumbnail_id($postID) );?>
                <div class="recent_post" style="background-image: url('<?php echo $feat_image; ?>'); background-size: cover;">
                    <?php $cat = get_the_category( $postID ); ?>
                    <div class="post_content">
                        <h3 class="cat"><a href="/all-projects/"><?php print_r($cat[0]->name); ?></a></h3>              
                        <h2><?php echo get_the_title($postID); ?></h2>
                        <p class="excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                        <div class="flex">
                            <a class="secondary_btn full" href="<?php the_permalink(); ?>">Read More 
                                <svg class="arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 8.00001L2 8.00002" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.3335 3.33334L14.0002 8.00001L9.3335 12.6667" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="mixed"></div>
                </div>
                <?php
            }
            echo '</div>';
        } 
        ?>
    </div>
</section>
<style>
    .mixed {
        background: <?php echo $overlay; ?>;
        mix-blend-mode: multiply;
        border-radius: 1px;
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        z-index: 1;
    }
</style>