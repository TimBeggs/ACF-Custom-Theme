<?php
get_header();
include(trailingslashit(get_template_directory()) . 'template-parts/search/index.php');
global $wp_query;
?>

<div class="search-result-wrap">

	<header id="page-header" class="container container-lg flex row afc jfsb">
		<h3 class="search-results-heading"><span class="count"><?php echo $wp_query->found_posts; ?></span> search results for <span>"<?php echo get_search_query(); ?>"</span></h3>
		<?php //get_search_form(); ?>
	</header>
	<?php
	search_layout();
	// bm_prefooter_cta($postID);
	?>

</div>
<?php
get_footer();
