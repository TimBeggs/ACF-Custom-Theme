<?php
if (!function_exists(('search_result'))) {
    function search_result()
    {
        $postID = get_the_ID();
        setup_postdata($postID);
        $title = get_the_title();
        $cats = get_the_category();
        $cat_list = $cats;
        $excerpt = get_excerpt($postID, 145);
        $thumb = get_post_meta($postID, 'article_thumbnail', true);
        $thumb_args = array(
            'size' => 'featuredPost'
        );
        if (!empty($thumb)) {
            $thumb_args['thumb_id'] = $thumb;
        } else {
            $thumb_args['thumb_id'] = get_post_thumbnail_id();
        }
	?>
	<article class="blog__listing item_1_3_gut-blog">

		<div class="post_img">
			<a href="<?php echo get_the_permalink(); ?>">
				<?php if(!empty(get_the_post_thumbnail(get_the_ID(), 'large'))) {
				echo get_the_post_thumbnail(get_the_ID(), 'large');
			} ?>
			</a>
		</div>
		<div class="post_meta">
			
			<h2 class="blog__listing__title"><?php echo $title; ?></h2>
			<div class="desc">
				<?php the_excerpt(); ?>
			</div>
			<div class="button">
				<a href="<?php the_permalink(); ?>" class="primary_btn">Readmore</a>
			</div>
		</div>
       
    </article>
<?php
    }
}
