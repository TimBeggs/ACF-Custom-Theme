<form role="search" method="get" class="search-form flex row jfs" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="search" class="search-field" value="<?php echo get_search_query(); ?>" name="s" aria-label="Search" />
    <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
</form>