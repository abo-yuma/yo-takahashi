<?php

/**
 * The template for displaying archive pages.
 *
 * @package Yo_Takahashi
 */

get_header();
?>

<header class="archive-header">
    <h1 class="archive-title">
        <?php the_archive_title(); ?>
    </h1>

    <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
</header>

<?php if (have_posts()) : ?>

    <div class="archive-posts">

        <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('archive-post'); ?>>

                <header class="entry-header">
                    <h2 class="post-title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <div class="post-date">
                        <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
                            🗓️ <?php echo esc_html(get_the_date()); ?>
                        </time>
                    </div>
                </header>

                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div>

            </article>

        <?php endwhile; ?>

    </div>

    <?php
    the_posts_pagination(array(
        'prev_text' => __('&laquo; Previous', 'yo-takahashi'),
        'next_text' => __('Next &raquo;', 'yo-takahashi'),
    ));
    ?>

<?php else : ?>

    <p><?php esc_html_e('No posts found.', 'yo-takahashi'); ?></p>

<?php endif; ?>

<?php get_footer(); ?>