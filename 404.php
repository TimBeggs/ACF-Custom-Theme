<?php
get_header();
$postID = get_the_ID();

// featured articles
$catID = get_queried_object()->term_id;
?>
<section class="error container container-lg">
	<div class="left">
		<a href="<?php echo home_url(); ?>">Back to Home</a>
		<h5>That page doesn’t exist. Try searching for something else.</h5>
		<?php get_search_form(); ?>
	</div>
	<div class="right">
		<h1 class="404 flex col afs jfs"><span id="404">404</span></h1>
	</div>
    
    
</section>
<?php

get_footer();
