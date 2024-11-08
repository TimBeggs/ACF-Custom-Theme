<?php
get_header();
$post_title = get_the_title(); ?>
<!-- <h1 class="container container-lg"><?php echo $post_title; ?></h1> -->
<?php
get_template_part('template-parts/flex/flexible_content');
?>
<?php
get_footer();