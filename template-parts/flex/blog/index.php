<?php
global $page_content;
$heading = $page_content['heading'];
$description = $page_content['description'];
$button_text = $page_content['button_text'];
$button_link = $page_content['button_link'];
$categories = $page_content['categories'];

?>

<section class="media_logos small-margin">
    <div class="container-lg container">
        <div class="media flex">
            <h3>
                <?php echo $heading; ?>
                <?php if(!empty($button_text)) : ?><a class="primary_btn on_tablet" href = "<?php echo $button_link['url']; ?>"><?php echo $button_text; ?></a><?php endif; ?>
            </h3>
            <div class = "media_desc"><?php echo $description; ?></div>
            <?php if(!empty($button_text)) : ?><a class="primary_btn" href = "<?php echo $button_link['url']; ?>"><?php echo $button_text; ?></a><?php endif; ?>
        </div>
        
    </div>
</section>

<?php if( $categories ) : ?>
<section class="presses_container small-margin">
	<div class="container-lg container">
		<div class="presses">
			<?php

          	if(is_page('68') || is_page(69)) {
				$args = array(
					'posts_per_page' => -1,
					'category__in'	=> $categories
				);
			} else {
				$args = array(
					'posts_per_page' => 2,
					'category__in'	=> $categories
				);
			}
			$news = new WP_Query( $args );
			if($news->have_posts()):
				while($news->have_posts()) : $news->the_post();
				$date = get_the_date();
				$title = get_the_title();
				$description = get_the_excerpt();
				$button_link = get_the_permalink();
				$categories = get_the_category();
				if (!empty($categories)) {
					$first_category = $categories[0];
					$first_category_name = $first_category->name;					
				}
				?>
				<div class="press">
					<div class="quote"><h3><?php echo $first_category_name; ?></h3></div>
					<div class="press_content">
						<?php if(!empty($title)) : ?><h2><?php echo $title; ?></h2><?php endif; ?>
						<?php if(!empty($date)) : ?><p class="date"><?php echo $date; ?></p><?php endif; ?>
						<?php if(!empty($description)) : ?><p><?php echo $description; ?></p><?php endif; ?>
					</div>
					<div class="flex">
						<a class="read_more" href = "<?php echo $button_link; ?>">
							<?php echo __('Read the Full Article', 'mbvtheme'); ?>
							<svg class="arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M14 8.00001L2 8.00002" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M9.3335 3.33334L14.0002 8.00001L9.3335 12.6667" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				</div>
			<?php 
			endwhile;
			endif; ?>
		</div>
	</div>
</section>
<?php endif; ?>