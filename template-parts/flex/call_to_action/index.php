<?php
global $page_content;
$cta_sub_heading = $page_content['cta_sub_heading'];
$cta_heading = $page_content['cta_heading'];
$cta_description = $page_content['cta_description'];
$display_mode = $page_content['display_mode'];
$cta_button_text = $page_content['cta_button_text'];
$cta_button_link = $page_content['cta_button_link'];
?>
<section class="cta <?php if($display_mode) { echo "dark"; } ?>">
    <div class="container container-lg cta_container">
        <div class="cta_wrapper">
            <div class="cta_content">
                <h4><?php echo $cta_sub_heading; ?></h4>
                <h3><?php echo $cta_heading; ?></h3>
                <p><?php echo $cta_description; ?></p>
            </div>
            <div class ="cta_button">
                <a href="<?php echo $cta_button_link?>" class ="<?php if($display_mode){ echo "light_btn"; } else { echo "primary_btn"; } ?>"> 
                    <?php echo $cta_button_text; ?>
                </a>
            </div>
        </div>
    </div>
</section>