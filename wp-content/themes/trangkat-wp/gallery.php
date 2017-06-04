<?php
/*
Template Name: Gallery
*/
get_header(); ?>

<?php
                wp_nav_menu( array(
                    'menu'              => 'gallery',
                    'theme_location'    => 'gallery',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'gallery-sub',
                    'menu_class'        => 'nav nav-tabs',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker())
                );
            ?>

<?php the_content();?>

<?php get_footer(); ?>