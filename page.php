<?php

/**
 * The template for displaying all pages.
 *
 * @package Yo_Takahashi
 */
?>

<?php get_header(); ?>

<?php
while (have_posts()) :
    the_post();
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>

        <?php if (has_post_thumbnail()) : ?>
            <div class="page-featured-image">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php endif; ?>

        <header class="entry-header">
            <?php the_title('<h1 class="page-title">', '</h1>'); ?>
        </header>

        <div class="entry-content">
            <?php
            the_content();
            ?>
        </div>

    </article>

<?php endwhile; ?>

<?php get_footer(); ?>