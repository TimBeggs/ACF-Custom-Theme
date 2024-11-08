<?php
include(trailingslashit(get_template_directory()) . 'template-parts/search/result.php');

if (!function_exists('search_results')) {
    function search_results()
    {
?>
        <section class="featured-articles container container-lg">
            <div id="article-container">
                <?php
                if (have_posts()) : while (have_posts()) :
                        the_post();
                        search_result();
                    endwhile;
                ?>
                    <section class="pagination flex row afc jfc">
                        <?php if (get_previous_posts_link()) { ?>
                          <div class="paginate-button" id="page-prev"><i class="fa fa-arrow-left"></i> <?php previous_posts_link('PREV'); ?></div>
                        <?php } ?>
						
						<?php if (get_next_posts_link()) { ?>
                        <div class="paginate-button" id="page-next"><?php next_posts_link('NEXT'); ?> <i class="fa fa-arrow-right"></i></div>
						<?php } ?>
						
                    </section>
                <?php
                endif;
                ?>
            </div>
        </section>
<?php
    }
}
