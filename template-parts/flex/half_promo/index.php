<?php
global $page_content;
$promo_alignment = $page_content['promo_alignment'];
$sub_title = $page_content['sub_title'];
$title = $page_content['title'];
$description = $page_content['description'];
$background = $page_content['background'];
$image = $page_content['image'];
$add_border = $page_content['add_border'];
$color = $page_content['color'];
$list_items = $page_content['list_items'];
$half_promo_button_1 = $page_content['half_promo_button_1'];
$half_promo_button1_url = $page_content['half_promo_button1_url'];
$half_promo_button2_text = $page_content['half_promo_button2_text'];
$half_promo_button2_url = $page_content['half_promo_button2_url'];
?>
<section class="half_promo <?php echo $add_border == 'Image' ? 'image-border' : 'content-border'; ?>">
    <div class="flex">
        <div class = "half <?php echo $promo_alignment; ?>">
            <div class="contents"  style="background: <?php echo $background; ?>">   
                <h4 style="color: <?php echo $color; ?>"><?php echo $sub_title; ?></h4>
                <h2 style="color: <?php echo $color; ?>"><?php echo $title; ?></h2>
                <p> <?php echo $description; ?> </p>
                <div class = "list">
                    <?php 
                        foreach($list_items as $list_item): ?>
                        <p>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1154 6.70538C9.72581 6.31581 9.09419 6.31581 8.70462 6.70538C8.31534 7.09466 8.315 7.72569 8.70385 8.11538L12.58 12L8.70385 15.8846C8.315 16.2743 8.31534 16.9053 8.70462 17.2946C9.09419 17.6842 9.72581 17.6842 10.1154 17.2946L15.41 12L10.1154 6.70538Z" fill="black" fill-opacity="0.7"/>
                                <mask id="mask0_1573_7385" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="8" y="6" width="8" height="12">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1154 6.70538C9.72581 6.31581 9.09419 6.31581 8.70462 6.70538C8.31534 7.09466 8.315 7.72569 8.70385 8.11538L12.58 12L8.70385 15.8846C8.315 16.2743 8.31534 16.9053 8.70462 17.2946C9.09419 17.6842 9.72581 17.6842 10.1154 17.2946L15.41 12L10.1154 6.70538Z" fill="white"/>
                                </mask>
                                <g mask="url(#mask0_1573_7385)">
                                <rect width="24" height="24" fill="#01674C"/>
                                </g>
                            </svg>
                            <?php echo $list_item['list_item_text']; ?>
                        </p>
                    <?php endforeach; ?>
                </div>
                <?php if(!empty($half_promo_button_1) || !empty($half_promo_button2_text)) : ?>
                    <div class = "promo_btns">
                        <?php 
                            if(!empty($half_promo_button_1)) : ?>
                                <a href="<?php echo $half_promo_button1_url; ?>" class ="primary_btn"> <?php echo $half_promo_button_1; ?></a>
                        <?php endif;  ?>
                        <?php 
                            if(!empty($half_promo_button2_text)) : ?>
                                <a href="<?php echo $half_promo_button2_url; ?>" class ="primary_btn"> <?php echo $half_promo_button2_text; ?></a>
                        <?php endif;  ?>
                    </div>
                <?php endif; ?>
                <div class="<?php if($add_border == 'Content') {echo 'add_border';}?>"></div>
            </div>
        </div>
        <div class = "half <?php if($add_border == 'Image') {echo 'add_border';}?>">
			<div class="img-wrap">
				<img src="<?php print_r($image['url']); ?>">
			</div>
        </div>
    </div>
</section>

<style>
    .half_promo .contents p{
        color: <?php echo $color; ?>; 
        
    }
    .half_promo .contents ul { 
        color: <?php echo $color; ?>; 
    }
    .half_promo .contents p svg rect {
        fill: <?php echo $color; ?>; 
    }

</style>