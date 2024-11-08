<?php
global $flex_content;
$heading = $flex_content['heading'];
$documents = $flex_content['documents'];?>
<section class="product_documentation">
    <div class="container-lg container">
        <?php if(!empty($heading)) : ?><h2><?php echo $heading; ?></h2><?php endif; ?>
        <?php if(is_array($documents) == 1) : ?>
            <div class="documents">
                <?php
                    foreach ($documents as $document) {
                        $icon = $document['icon'];
                        $title = $document['title'];
                        $text = $document['text'];
                        $download_link = $document['download_link'];?>
                        <div class="document">
                            <div class="icon">
                                <img src = "<?php print_r($icon['url']); ?>">
                            </div>
                            <?php if(!empty($title)) : ?><h3><?php echo $title; ?></h3><?php endif; ?>
                            <?php if(!empty($text)):?>
                                <a class="primary_btn" href="<?php if(is_array($download_link) == 1) : echo $download_link['url']; endif; ?>" download><?php echo $text; ?></a>
                            <?php endif; ?>
                        </div>
                        <?php
                    }
                ?>
            </div>
        <?php endif; ?>
    </div>
</section>