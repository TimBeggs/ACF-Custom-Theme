<?php
global $page_content;
$process_title = $page_content['process_title'];
$process_sub_title = $page_content['process_sub_title'];    
$processes = $page_content['processes'];
?>
<section class="process_container">
    <h2><?php echo $process_title; ?></h2>
    <h4 class = "process_sub_title"><?php echo $process_sub_title; ?></h4>
    <?php if(is_array($processes) == 1) : ?>
    <div class="container-main container processes">
        <div class = "step_titles">
            <?php foreach ($processes as $key => $process) {
                $title = $process['title'];
                $icon = $process['icon'];
                $step = $key + 1; ?>
                <div class="step step_<?php echo $key; if($key == 0) : echo ' activated step_opacity'; endif; ?>" id="step_<?php echo $key; ?>">
                    <div class="process_graph">    
                        <div class="step_number"><?php echo $step;?></div>
                        <div class="process_icon"><img src="<?php print_r($icon['url']); ?>"></div>
                    </div>
                    <h4>
                        <?php echo $title; ?>
                    </h4>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="line"></div>
        <div class="step_details">
            <?php foreach ($processes as $key => $process) {
                $heading = $process['heading'];
                $description = $process['description'];
                $image = $process['image'];?>
                <div class = "process step_<?php echo $key; if($key == 0) : echo ' activated'; endif; ?>">
                    <div class="process_data">
                        <?php if(!empty($heading)) : ?><h3><?php echo $heading; ?></h3><?php endif; ?>
                        <?php if(!empty($description)) : ?><p><?php echo $description; ?></p><?php endif; ?>
                    </div>
                    <div class="process_feature">
                        <img src="<?php print_r($image['url']); ?>">
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <?php endif; ?> 
</section>
<script>
    $(document).ready(function () {
        $(".step").each(function() {
            $(this).click(function() {
                $(".step").each(function() {
                    $(this).removeClass("activated")
                    $(this).removeClass("step_opacity")
                })
                var id = $(this).attr("id");
                $(".process").each(function() {
                    if($(this).hasClass(id)) {
                        $(this).addClass("activated");
                    }
                    else {
                        $(this).removeClass("activated");
                    }
                })
                $(this).addClass("activated");
                $(this).addClass("step_opacity")
            })
        })
    })
</script>
