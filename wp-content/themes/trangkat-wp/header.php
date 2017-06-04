<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Trang Kat Photography
 */
?>
<!DOCTYPE html>
<html lang="en-AU">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>

    <body>
        <div class="logo navbar-fixed-top" style="height: 50px;">  
                <img src="<?php bloginfo('template_url'); ?>/img/logo.png">
        </div>
        
        <nav class="navbar navbar-default navbar-fixed-top" id="nav1" role="navigation">
            <!-- Nav toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-main-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

             <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'nav-main-collapse',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker())
                );
            ?>
        </nav>