<?php
get_header();
$post_title = get_the_title(); ?>
<section class = "product_overview">
	<div class = "product_information container container-lg">
		<a href="/stones" class="st-hero__back-to-st"> <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M12 6.70711L12.7071 6.70711L12.7071 5.29289L12 5.29289L12 6.70711ZM0.5 5.5C0.223858 5.77614 0.223858 6.22386 0.5 6.5L5 11C5.27614 11.2761 5.72386 11.2761 6 11C6.27614 10.7239 6.27614 10.2761 6 10L2 6L6 2C6.27614 1.72386 6.27614 1.27614 6 0.999999C5.72386 0.723857 5.27614 0.723857 5 0.999999L0.5 5.5ZM12 5.29289L1 5.29289L1 6.70711L12 6.70711L12 5.29289Z" fill="#464646"/>
		</svg> Back to Stones</a>
	</div>
	<?php
	get_template_part('template-parts/flex/flexible_content');
	?>
</section>
<?php
get_footer();