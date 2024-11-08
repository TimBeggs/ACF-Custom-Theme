<?php
/*--------------------------------------------------------------
# structural sections
--------------------------------------------------------------*/

// visible header
if (!function_exists('site_header')) :
    function site_header()
    { ?>
    <?php
        $locations = get_nav_menu_locations();
        $menu_id   = $locations[ 'menu-main' ] ;
        $menu = wp_get_nav_menu_object($menu_id); 
        $quote_text = get_field('get_quote_text', $menu);
        $link = get_field('link', $menu);
    ?>
        <div class = "main-header">
            <header id="site-header" role="banner">
                <div class="top_menu container container-lg">
                    <nav id="site-top-navigation" class="top-navigation flex jfe" role="navigation">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'top_menu',
                            'menu_id'        => 'top-menu',
                            'menu_class'     => 'flex row',
                        ));
                        ?>
                    </nav>
                </div>
                <div class="bottom_menu container container-lg flex row bfc jfsb">
                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    ?>
                    <a class="logo" href = "<?php echo get_site_url(); ?>"><img class = "desktop_nav_icon" src = "<?php echo $image[0]; ?>"></a>
                    <div class="flex for_mobile">
                        <svg class="mobile_nav_icon" width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.43795 18.8768H28.3147M4.71875 9.43839H33.0339M4.71875 28.3152H33.0339" stroke="#55646C" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <svg class="mobile_nav_close" width="38" height="28" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 2L19.8633 22.0887" stroke="#55646C" stroke-width="3.15" stroke-linecap="round"/>
                            <path d="M2 21.5462L20.5462 3.00001" stroke="#55646C" stroke-width="3.15" stroke-linecap="round"/>
                        </svg>
                        <?php if(!empty($quote_text)) : ?>
                            <a class="primary_btn" href = "<?php if(is_array($link) == 1) : echo $link['url']; endif; ?>"><?php echo $quote_text; ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="mob_top_menu">
                        <nav id="mob-site-top-navigation" class="mob-top-navigation flex jfe" role="navigation">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'top_menu',
                                'menu_id'        => 'top-menu',
                                'menu_class'     => 'flex row',
                            ));
                            ?>
                        </nav>
                    </div>
                    <nav id="site-navigation" class="main-navigation flex jfe" role="navigation">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-main',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'flex row',
                        ));
                        ?>                    
                        <?php if(!empty($quote_text)) : ?>
                            <a class="primary_btn" href = "<?php if(is_array($link) == 1) : echo $link['url']; endif; ?>"><?php echo $quote_text; ?></a>
                        <?php endif; ?>
                    </nav>
                </div>
            </header>
            <div id="mobile-site-navigation" class="main-mobile-navigation flex jfe" role="navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-main',
                    'menu_id'        => 'mob-primary-menu',
                    'menu_class'     => 'flex row afc',
                ));
                ?>
            </div>
        </div>
    <?php
    }
endif;

// visible footer
if (!function_exists('site_footer')) :
    function site_footer()
    { ?>
        <section class="form-block" id="form-block">
            <div class="container container-lg get_quote_form">
                <div class="form-block__content item_1_2 block-text">
                    <div class="form_text">
                        <h3 class="form_heading"><?php the_field('footer_quote_title', 'option'); ?></h3>
                        <?php the_field('footer_quote_desc', 'option'); ?>
                    </div>
                </div>
                <div class="form-block__content item_1_2 block-form">
                    <?php echo do_shortcode('[gravityform id="6" title="false"]'); ?>
                </div>
            </div>
        </section>
        <footer id="site-footer" class="site-footer" role="contentinfo">
            <div class="container container-lg flex col">
                <section class="site-footer__top-row">
                    <div class="site-footer__logo">
                        <div>
                            <a href = "<?php echo get_site_url(); ?>"><?php render_svg("footer_logo.png", "footer-logo"); ?></a>
                         </div>
                        <div class = "footer_social">
                            <?php if( $twitter = get_field('twitter', 'option') ) : ?><a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php endif; ?>
                            <?php if( $facebook = get_field('facebook', 'option') ) : ?><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php endif; ?>
                            <?php if( $instagram = get_field('instagram', 'option') ) : ?><a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php endif; ?>
                        </div>
                        <div class="policy"><?php the_field('footer_bottom', 'option'); ?></div>
                        <div class="copy_right"><?php the_field('footer_copyright', 'option'); ?></div>
                    </div>
                    <div class="site-footer__menu_container">
                        <div class="site-footer__menu item_1_4">
                            <!-- <p class="menu_label">Stones</p> -->
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'products_menu',
                                'menu_id'        => 'products_menu',
                                'menu_class'	 => 'products_menu',
                            ) );
                            ?>
                        </div>
                        <div class="site-footer__menu item_1_4">
                            <!-- <p class="menu_label">Company</p> -->
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'about_menu',
                                'menu_id'        => 'about_menu',
                                'menu_class'	 => 'about_menu',
                            ) );
                            ?>
                        </div>
                        <div class="site-footer__menu item_1_4">
                            <p class="menu_label">Sales Office:</p>
                            <p class="company_detail"><?php the_field('office', 'option'); ?></p>
                            <p class="menu_label">Phone:</p>
                            <p class="company_detail"><?php the_field('phone', 'option'); ?></p>
                            <p class="menu_label">Email:</p>
                            <p class="company_detail"><?php the_field('email', 'option'); ?></p>
                        </div>
                    </div>
                    <div class="mobile policy" style = "display: none;"><?php the_field('footer_bottom', 'option'); ?></div>
                    <div class="mobile copy_right" style = "display: none;"><?php the_field('footer_copyright', 'option'); ?></div>
                </section>
            </div>
        </footer>
    <?php
    }
endif;