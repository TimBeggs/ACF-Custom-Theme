<?php
global $flex_content;
global $page_content;

$flex_contents = get_field('stone_overview');
$page_contents = get_field('content_rows');

$name = get_post( $id )->post_type;
if ($name == "stones"):
	if(!empty($flex_contents)): foreach($flex_contents as $content):
		$flex_content = $content;
		get_template_part('template-parts/flex/'. $flex_content['acf_fc_layout'] .'/index');
	endforeach; endif;

	if(!empty($page_contents)): foreach($page_contents as $content):
		$page_content = $content;
		get_template_part('template-parts/flex/'. $page_content['acf_fc_layout'] .'/index');
	endforeach; endif;
else :
	if(!empty($page_contents)): foreach($page_contents as $content):
		$page_content = $content;
		get_template_part('template-parts/flex/'. $page_content['acf_fc_layout'] .'/index');
	endforeach; endif;
	
	if(!empty($flex_contents)): foreach($flex_contents as $content):
		$flex_content = $content;
		get_template_part('template-parts/flex/'. $flex_content['acf_fc_layout'] .'/index');
	endforeach; endif;
endif; 





