<?php
/*
================================================================================================
Perfect Choice - single.php
================================================================================================
This is the most generic template file in a WordPress theme and is one of the two required files 
for a theme (the other being style.css). The index.php template file is flexible. It can be used to 
include all references to the header, content, widget, footer and any other pages created in 
WordPress. Or it can be divided into modular template files, each taking on part of the workload. 
If you do not provide other template files, WordPress may have default files or functions to 
perform their jobs.

@package        Perfect Choice WordPress Theme
@copyright      Copyright (C) 2018. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://www.benjlu.com/)
================================================================================================
*/
?>
<?php get_header(); ?>
    <div id="global-layout" class="<?php echo esc_attr(get_theme_mod('global_layout', 'left-sidebar')); ?>">
        <div id="content-area" class="content-area">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content', 'single'); ?>
            <?php endwhile; ?>
            <?php 
                the_post_navigation(array(
                    'next_text' => '<span class="post-next" aria-hiddent="true">' . esc_html__('Next', 'perfect-choice') . '</span>' . '<span class="post-title">%title</span>',
                    'prev_text' => '<span class="post-previous" aria-hidden="true">' . esc_html__( 'Previous', 'perfect-choice' ) . '</span> ' . '<span class="post-title">%title</span>',
                ));
            ?>
            <?php comments_template(); ?>
        </div>
        <?php if ('left-sidebar' == get_theme_mod('global_layout')) { ?>
            <?php get_sidebar(); ?>
        <?php } else if ('right-sidebar' == get_theme_mod('global_layout')) { ?>
            <?php get_sidebar(); ?>
        <?php } ?>
    </div>
<?php get_footer(); ?>