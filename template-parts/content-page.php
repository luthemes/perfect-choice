<?php
/*
================================================================================================
Perfect Choice - content-page.php
================================================================================================
This is the most generic template file in a WordPress theme and is one required files to display
content. This content.php is the main content that will be displayed.

@package        Perfect Choice WordPress Theme
@copyright      Copyright (C) 2017. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://www.benjlu.com/)
================================================================================================
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (has_post_thumbnail()) { ?>
        <div class="entry-post-thumbnail">
            <?php the_post_thumbnail('perfect-choice-medium-thumbnails'); ?>
        </div>
    <?php } ?>
    <header class="entry-header">
        <?php the_title(sprintf('<h1 class="entry-title">', '</h1>')); ?>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array(
            'before'      => '<div class="page-links">' . esc_html__('Pages:', 'perfect-choice'),
            'after'       => '</div>',
            'link_before' => '<span>',
            'link_after'  => '</span>',
            'pagelink'    => '<span class="screen-reader-text">' . esc_html__('Page', 'perfect-choice') . ' </span>%',
            'separator'   => '<span class="screen-reader-text">,</span> ',
        ));
        ?>
    </div>
</article>