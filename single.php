<?php

/**
 * The template for displaying all single posts.
 *
 * @package Yo_Takahashi
 */
?>

<?php get_header(); ?>

<?php
while (have_posts()) :
    the_post();
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('post-content'); ?>>

        <?php if (has_post_thumbnail()) : ?>
            <div class="post-featured-image">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php endif; ?>

        <header class="entry-header">
            <?php the_title('<h1 class="post-title">', '</h1>'); ?>
            <div class="post-date">
                <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
                    🗓️ <?php echo esc_html(get_the_date()); ?>
                </time>
            </div>
        </header>

        <div class="entry-content">
            <?php the_content(); ?>
        </div>

    </article>

<?php endwhile; ?>

<?php get_footer(); ?>