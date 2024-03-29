<?php
/*
================================================================================================
Perfect Choice - custom-image.php
================================================================================================
This is the most generic template file in a WordPress theme and is one of required file to display
custom image by using wp_add_inline_style(); for the front-page.php.

@package        Perfect Choice WordPress Theme
@copyright      Copyright (C) 2018. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://www.benjlu.com/)
================================================================================================
*/
function perfect_choice_inline_styles_custom_image_setup() {
        $custom_image = esc_url(get_theme_mod('custom_image', get_template_directory_uri() . '/images/custom-image.jpg'));
        $avatar = esc_url(get_theme_mod('custom_avatar', get_template_directory_uri() . '/images/avatar.jpg'));
        $custom_css = "
            .site-header {
                min-height: 100vh;
            }
            
            .site-header.custom-image {
                background: url({$custom_image});
                background-attachment: fixed;
                background-position: center;
            }

            .site-avatar {
                background: url({$avatar}) no-repeat;
                border: 10px solid #cccccc;
                border-radius: 50%;
                height: 250px;
                margin: 0 auto;
                width: 250px;
            }
        ";
        wp_add_inline_style('perfect-choice-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'perfect_choice_inline_styles_custom_image_setup');