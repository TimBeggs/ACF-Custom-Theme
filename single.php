<?php
get_header();
$postID = get_the_ID();
?>
<?php
the_post();
?>
<section class="single-post__hero" style = "background-image: url('<?php echo the_post_thumbnail_url(); ?>')">
    <div class="container-lg container">
        <a href="/blog" class="cs-hero__back-to-cs"> <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12 6.70711L12.7071 6.70711L12.7071 5.29289L12 5.29289L12 6.70711ZM0.5 5.5C0.223858 5.77614 0.223858 6.22386 0.5 6.5L5 11C5.27614 11.2761 5.72386 11.2761 6 11C6.27614 10.7239 6.27614 10.2761 6 10L2 6L6 2C6.27614 1.72386 6.27614 1.27614 6 0.999999C5.72386 0.723857 5.27614 0.723857 5 0.999999L0.5 5.5ZM12 5.29289L1 5.29289L1 6.70711L12 6.70711L12 5.29289Z" fill="#EBE9E3"/>
</svg> Back to Resources</a>
        <div class="single-post-meta">
            <div class="half">
                <div class="content">
                    <h1><?php $custom_banner_title = get_field('custom_banner_title'); echo $custom_banner_title ? $custom_banner_title : get_the_title(); ?></h1>
                    <p><?php $excerpt = get_the_excerpt(); $custom_banner_content = get_field('custom_banner_content'); echo $custom_banner_content ? $custom_banner_content : $excerpt; ?></p>
                </div>
            </div>
            <div class="mixed_bg"></div>
        </div>
    </div>
</section>
<main>
    <section class="single-post__container container container-lg clearfix">
        <div class='right-content'>
            <?php the_content(); ?>
        </div>
    </section>    
	
	<?php
		get_template_part('template-parts/flex/flexible_content');
	?>
	
</main>

<?php

get_footer();
