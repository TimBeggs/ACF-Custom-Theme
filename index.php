<?php
get_header();
$postID = get_the_ID();

if(have_posts()): while(have_posts()): the_post();
	get_template_part('template-parts/flex/flexible_content');
endwhile; endif;

get_footer();
