<?php
global $page_content;
$h = $page_content['title_h'] ? $page_content['title_h'] : 'h2';
?>
<div class="additional <?php echo $page_content['layout']; ?>">
	<div class="left">
		<div class="inner-left">
		
			<<?php echo $h; ?>><?php echo $page_content['title']; ?></<?php echo $h; ?>>
			<div class="additional-content"><?php echo $page_content['content']; ?></div>
			<?php
			$button = $page_content['button'];
			if( is_array( $button ) ):
			?>
			<p><a href="<?php echo $button['url']; ?>" <?php echo $button['target'] ? 'target="'. $button['target'] .'"' : ''; ?> class="primary_btn"><?php echo $button['title']; ?></a></p>
			<?php endif; ?>
			
		</div>
	</div>
	<div class="right">
		<div class="inner-right">
			<div class="right-content">
				<?php echo $page_content['right_content']; ?>
			</div>
		</div>
	</div>
</div>