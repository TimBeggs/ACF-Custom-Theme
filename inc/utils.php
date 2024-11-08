<?php
// var dump with pre
if (!function_exists('debug')) {
    function debug($var)
    { ?>
        <pre>
            <?php echo var_dump($var); ?>
        </pre>
        <?php
    }
}

// loop and apply a callback, like JavaScript .map()
if (!function_exists('loop')) {
    function loop($iterations, $callback)
    {
        if (is_callable($callback)) {
            for ($i = 0; $i < $iterations; $i++) {
                $callback($i);
            }
        }
    }
}

if (!function_exists('get_html_attr')) {
    function get_html_attr($html, $attr)
    {
        preg_match('@' . $attr . '="([^"]+)"@', $html, $match);
        $src = array_pop($match);
        return $src;
    }
}

if (!function_exists('if_is_single_page')) {
    function if_is_single_page($output)
    {
        if (is_single()) {
            return $output;
        }
    }
}

// check if category has children, the return children
if (!function_exists('category_has_children')) {
    function category_has_children($term_id = 0, $taxonomy = 'category')
    {
        $children = get_categories(array(
            'child_of'      => $term_id,
            'taxonomy'      => $taxonomy,
            'hide_empty'    => false,
            'fields'        => 'ids',
        ));
        return ($children);
    }
}


// -- renderers

// breadcrumbs
if (!function_exists('render_breadcrumbs')) {
    function render_breadcrumbs()
    {
        // function to generate links from a list of categories
        function generate_link($cats, $is_cat)
        {
            $output = array();
            if (is_array($cats)) {
                foreach ($cats as $cat) {
                    if ($is_cat) {
                        $catID = $cat->term_id;
                        $what_is = get_term_meta($catID, 'corresponding_what_is_page', true);
                        if (!empty($what_is)) {
                            $link = get_permalink($what_is);
                        } else {
                            $link = get_category_link($cat->term_id);
                        }
                    } else {
                        $link = get_term_link($cat->term_id);
                    }
                    $new_crumb = "<a itemprop='item' href='" . $link . "'><span itemprop='name'>" . $cat->name . "</span></a>";
                    if (!in_array($new_crumb, $output)) {
                        $output[] = $new_crumb;
                    }
                }
                return $output;
            }
        }
        $breadcrumbs = array();

        // for articles and pages
        if (is_page() || is_single()) {
            $postID = get_the_ID();
            $title = get_the_title($postID);
            $industry = get_the_terms($postID, 'industry') ? get_the_terms($postID, 'industry') : array();
            $categories = get_the_category($postID);
            $child_cats = array();
            $parent_cats = array();
            foreach ($categories as $cat) {
                if ($cat->category_parent !== 0) {
                    $child_cats[] = get_term($cat->term_id);
                    if (get_category($cat->term_id)->parent) {
                        $category_parent = get_category($cat->term_id)->parent;
                        $parent = get_term($category_parent);
                        $parent_cats[] = $parent;
                    }
                } else {
                    $parent_cats[] = get_term($cat->term_id);
                }
            }
            $crumb_groups = array(
                'parents' => $parent_cats,
                'children' => $child_cats,
                'industry' => $industry
            );
            foreach ($crumb_groups as $key => $group) {
                if ($key !== 'industry') {
                    $group = generate_link($group, true);
                } else {
                    $group = generate_link($group, false);
                }
                $breadcrumbs = array_merge($breadcrumbs, $group);
            }
        }

        // for categories/taxonomies
        if (is_category() || is_tax()) {
            $parent = null;
            if (is_category()) {
                $catID = get_queried_object()->term_id;
                $category_parent = get_category($catID)->parent;
                if ($category_parent) {
                    $parent = get_category($category_parent);
                    $parent = "<a itemprop='item' href='" . get_category_link($parent->term_id) . "'><span itemprop='name'>" . $parent->name . "</span></a>";
                    $breadcrumbs[] = $parent;
                }
            }
            $title = get_queried_object()->name;
            $breadcrumbs[] = $title;
        }

        // put it all together now
        // open breadcrumbs
        $output = "<nav id='breadcrumbs'><ul class='flex row afc jfs' itemscope itemtype='https://schema.org/BreadcrumbList'><li itemprop='itemListElement' itemscope
        itemtype='https://schema.org/ListItem'><a class='home-link' itemprop='item' href='" . get_site_url() . "'><span itemprop='name'>Blog</span></a><meta itemprop='position' content='1' /></li>";
        $i = 2;
        $last_crumb = array_key_last($breadcrumbs);
        foreach ($breadcrumbs as $key => $crumb) {
            if($key !== $last_crumb) {
                $output .= "<i class='fas fa-chevron-right'></i><li itemprop='itemListElement' itemscope
                itemtype='https://schema.org/ListItem'>" . $crumb . "<meta itemprop='position' content='".$i++."' /></li>";
            } else {
                $output .= "<i class='fas fa-chevron-right'></i><li itemprop='itemListElement' itemscope
            itemtype='https://schema.org/ListItem'><span itemprop='name'>" . $crumb . "</span><meta itemprop='position' content='".$i++."' /></li>";
            }
            
        }
        // close breadcrumbs
        $output .= "</ul></nav>";

        echo $output;
    }
}

// custom excerpt length
if (!function_exists('get_excerpt')) {
    function get_excerpt($postID = false, $numletters, $readmore = true)
    {
        if ($postID) {
            $content_post = get_post($postID);
            $content = $content_post->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]&gt;', $content);
            $permalink = get_the_permalink($postID);
            $excerpt = $content;
        } else {
            $excerpt = get_the_content();
        }

        $excerpt = preg_replace(" ([*])", '', $excerpt);
        $excerpt = strip_shortcodes($excerpt);
        $excerpt = strip_tags($excerpt);
        $excerpt = substr($excerpt, 0, $numletters);
        $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
        if($readmore) {
            $excerpt .= ' <a class="readmore" href="' . esc_url($permalink) . '">Read More <span>>></span></a>';
        } else {
            $excerpt .= "...";
        }
        

        return $excerpt;
    }
}

// render an array of menus
if (!function_exists('render_menus')) {
    function render_menus($menus, $show_title = false)
    {
        foreach ($menus as $menu) {
            if ($show_title) {
            }
            echo $menu;
        }
    }
}

// render an svg
if (!function_exists('render_svg')) {
    function render_svg($file, $htmlClass)
    {
    ?>
        <img class="<?php echo $htmlClass; ?>" src="<?php echo get_stylesheet_directory_uri().'/assets/svg/'.$file; ?>">
    <?php
    }
}