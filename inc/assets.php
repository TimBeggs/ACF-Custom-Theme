<?php
define('GOOGLE_ANALYTICS_ID', '');
// load theme assets and inherited dependencies
if (!function_exists('bm_enqueue_assets')) :
    add_action('wp_enqueue_scripts', 'bm_enqueue_assets');
    function bm_enqueue_assets()
    {
        wp_enqueue_script('site_main_js', get_template_directory_uri() . '/assets/js/main.js', null, null, true);
        wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header/style.css', array(), time());
        wp_enqueue_style('global', get_template_directory_uri() . '/assets/css/global.css', array(), time());        
        wp_enqueue_style('post', get_template_directory_uri() . '/assets/css/post.css');
        wp_enqueue_style("styles", get_stylesheet_directory_uri() . '/template-parts/flex/product_overview/styles.css');
        wp_enqueue_style("features_styles", get_stylesheet_directory_uri() . '/template-parts/flex/features/styles.css');
        wp_enqueue_style("hero_styles", get_stylesheet_directory_uri() . '/template-parts/flex/hero/styles.css', array(), time());
        wp_enqueue_style("icon_features_styles", get_stylesheet_directory_uri() . '/template-parts/flex/icon_features/styles.css');
        wp_enqueue_style("media_styles", get_stylesheet_directory_uri() . '/template-parts/flex/media_and_logos/styles.css');
        wp_enqueue_style("image_background_content_left_styles", get_stylesheet_directory_uri() . '/template-parts/flex/image_background_content_left/styles.css');
        wp_enqueue_style("faq_styles", get_stylesheet_directory_uri() . '/template-parts/flex/faq/styles.css');
        wp_enqueue_style("cta_styles", get_stylesheet_directory_uri() . '/template-parts/flex/call_to_action/styles.css');
        wp_enqueue_style("half_promo_styles", get_stylesheet_directory_uri() . '/template-parts/flex/half_promo/styles.css');
        wp_enqueue_style("finish_hero_styles", get_stylesheet_directory_uri() . '/template-parts/flex/finish_hero/styles.css'); 
        wp_enqueue_style("process_styles", get_stylesheet_directory_uri() . '/template-parts/flex/process/styles.css', array(), time());
        wp_enqueue_style("product_details_styles", get_stylesheet_directory_uri() . '/template-parts/flex/product_details/styles.css');
        wp_enqueue_style("product_gallery_styles", get_stylesheet_directory_uri() . '/template-parts/flex/product_gallery/styles.css');        
        wp_enqueue_style("product_cards_styles", get_stylesheet_directory_uri() . '/template-parts/flex/product_cards/styles.css');        
        wp_enqueue_style("hotspot_styles", get_stylesheet_directory_uri() . '/template-parts/flex/hotspot/styles.css');               
        wp_enqueue_style("full_width_img_styles", get_stylesheet_directory_uri() . '/template-parts/flex/full_width_image/styles.css');
        wp_enqueue_style("product_documentation_styles", get_stylesheet_directory_uri() . '/template-parts/flex/product_documentation/styles.css');
        wp_enqueue_style("image_with_text_styles", get_stylesheet_directory_uri() . '/template-parts/flex/image_with_text/styles.css');
        wp_enqueue_style("resource_styles", get_stylesheet_directory_uri() . '/template-parts/flex/resource_downloads/styles.css');
        wp_enqueue_style("landing_styles", get_stylesheet_directory_uri() . '/template-parts/flex/landing_page_hero/styles.css'); 
        wp_enqueue_style("testimonial_styles", get_stylesheet_directory_uri() . '/template-parts/flex/testimonials/styles.css'); 
        wp_enqueue_style("form_styles", get_stylesheet_directory_uri() . '/template-parts/flex/get_in_touch_form/styles.css'); 
        wp_enqueue_style("recent_posts_styles", get_stylesheet_directory_uri() . '/template-parts/flex/most_recent_projects/styles.css');  
        wp_enqueue_style("press_styles", get_stylesheet_directory_uri() . '/template-parts/flex/presses/styles.css');   
        wp_enqueue_style("static_hero_styles", get_stylesheet_directory_uri() . '/template-parts/flex/static_hero/styles.css', array(), time());
        wp_enqueue_style("information_carousel_styles", get_stylesheet_directory_uri() . '/template-parts/flex/information_carousel/styles.css');
        wp_enqueue_style("additional_styles", get_stylesheet_directory_uri() . '/template-parts/flex/additional/styles.css', array(), time());
        wp_enqueue_style("responsive_styles", get_stylesheet_directory_uri() . '/assets/css/responsive.css', array(), time());    
    }
endif;

// let's async and defer some scripts
function add_defer_attribute($tag, $handle)
{
    // add script handles to the array below
    $scripts_to_defer = array('font-awesome');

    foreach ($scripts_to_defer as $defer_script) {
        if ($defer_script === $handle) {
            return str_replace(' src', ' defer src', $tag);
        }
    }
    return $tag;
}
// add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);

function add_async_attribute($tag, $handle)
{
    $scripts_to_async = array('site_main_js');

    foreach ($scripts_to_async as $async_script) {
        if ($async_script === $handle) {
            return str_replace(' src', ' async src', $tag);
        }
    }
    return $tag;
}
add_filter('script_loader_tag', 'add_async_attribute', 10, 2);

