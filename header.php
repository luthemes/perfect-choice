<?php
/*
===============================================================================================================
Perfect Choice - index.php
===============================================================================================================
This is the most generic template file in a WordPress theme and is one of the two required files for a theme 
(the other being style.css). The index.php template file is flexible. It can be used to include all references 
to the header, content, widget, footer and any other pages created in WordPress. Or it can be divided into 
modular template files, each taking on part of the workload. If you do not provide other template files, 
WordPress may have default files or functions to perform their jobs.

@package        Perfect Choice WordPress Theme
@copyright      Copyright (C) 2018. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://www.benjlu.com/)
===============================================================================================================
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="http://gmpg.org/xfn/11" rel="profile" />
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
    <?php if (is_front_page() && !is_home()) { ?> 
        <header id="site-header" class="site-header custom-image">
            <div class="site-avatar"></div>
            <div id="site-branding" class="site-branding">
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                <h4 class="site-description"><?php bloginfo('description'); ?></h4>
            </div>
        </header>
    <?php } else if (get_header_image()) { ?>
        <header id="site-header" class="site-header header-image">
            <div id="site-branding" class="site-branding">
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                <h4 class="site-description"><?php bloginfo('description'); ?></h4>
            </div>
        </header>
    <?php } ?>
    <section id="main-navigation" class="main-navigation">
        <div id="primary-search" class="primary-search">
        <?php if (has_nav_menu('primary-navigation')) { ?>
            <nav id="site-navigation" class="primary-navigation">
                <button class="menu-toggle" aria-conrol="primary-menu" aria-expanded="false"><?php esc_html_e('Menu', 'perfect-choice'); ?></button>
                <?php wp_nav_menu(array(
                    'theme_location'    => 'primary-navigation',
                    'menu_id'           => 'primary-menu',
                    'menu_class'        => 'nav-menu',
                )); 
                ?>
            </nav>            
        <?php } ?>
        <div id="site-search" class="site-search">
            <?php get_search_form(); ?>
        </div>
        </div>
    </section>
    <section id="site-content" class="site-content">
        <div id="site-main" class="site-main">