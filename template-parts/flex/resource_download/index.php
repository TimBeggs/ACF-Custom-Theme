<?php
global $page_content;
$title = $page_content['title'];
$downloads = $page_content['downloads'];
?>
<section class="download_resources download_resources_multi_columns">
    <div class="container-lg container">
        <?php if(!empty($title)) : ?><h2><?php echo $title; ?></h2><?php endif; ?>
        <?php if( is_array($downloads) ) : ?>
            <div class="resources">
                <?php foreach ($downloads as $key => $download ) {
                    $heading = $download['title'];
                    $download_files = $download['files']; ?>
                    <div class="resource">
						<h3><?php echo $heading; ?></h3>
						<div class="files">
							<?php if( $download_files ) foreach( $download_files as $file ) :  ?>
							<a href="<?php echo $file['url']; ?>" download>
								<span><?php 
									$file_info = pathinfo($file['filename']);
									$file_extension = strtolower($file_info['extension']);
									echo $file_extension; ?></span>
                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.877 4.71918V25.169" stroke="#55646C" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.5859 18.8768L18.8782 25.169L25.1705 18.8768" stroke="#55646C" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M31.462 25.169V31.4613C31.4297 31.9065 31.2235 32.3211 30.8879 32.6155C30.5523 32.9098 30.1144 33.0603 29.6687 33.0343H8.08626C7.64063 33.0603 7.20268 32.9098 6.8671 32.6155C6.53152 32.3211 6.32528 31.9065 6.29297 31.4613V25.169" stroke="#55646C" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                        	</a>
							<?php endforeach; ?>
						</div>
                        
                    </div>
                <?php
                }
                ?>
            </div>
        <?php endif; ?>
    </div>
</section>