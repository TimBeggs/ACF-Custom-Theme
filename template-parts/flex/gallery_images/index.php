<?php
global $page_content;
$galleries = $page_content['gallery'];
$layout = $page_content['layout'];
if( $layout == 'grid' ) :
?>
<section class="product_cards gallery_images_wrap">
    <div class="container-lg container">
	<?php
        if ( $galleries ) {
            echo '<div class="cards">';
            foreach ( $galleries as $gallery ) {
				//var_dump( $gallery) ;
        ?>
                <div class="card_img gallery_img">
                    <img src="<?php echo $gallery['sizes']['large']; ?>" alt="" />
					<div class="title"></div>
                    <div class="flex">
                        <a class="secondary_btn full" modal="<?php echo $gallery['url']; ?>">View Full Size 
                            <svg class="arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 8.00001L2 8.00002" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.3335 3.33334L14.0002 8.00001L9.3335 12.6667" stroke="#55646C" stroke-width="1.7358" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <?php
            }
            echo '</div>';
        } 
        ?>
    </div>
</section>
<div class="modal">
    <i class="fa fa-close" style="font-size:24px"></i>
    <div class="modal_body popup_image"></div>
</div>

<?php else : ?>
<section class="gallery_images_slider_wrap">
    <div class="container-lg container">
		<div class="gallery_slider">
		<?php
			if ( $galleries ) {
				?><div class="gallery_images_one_column"><?php
				foreach ( $galleries as $gallery ) {
			?>
					<div class="gallery_img">
						<img src="<?php echo $gallery['url']; ?>" alt="" />
					</div>
					<?php
				}
				?></div> 
				<svg class="left-slide" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M3.21998 12.8768L22.5352 12.8768" stroke="#CBCBC5" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M10.7305 20.3883L3.21901 12.8768L10.7305 5.36536" stroke="#CBCBC5" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
				<svg class = "right-slide" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M22.5339 12.8767L3.21875 12.8767" stroke="#CBCBC5" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M15.0234 5.36527L22.5349 12.8767L15.0234 20.3882" stroke="#CBCBC5" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
				</svg><?php
			} 
			?>
		</div>
    </div>
</section>
<?php endif; ?>