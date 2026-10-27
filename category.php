<?php

/**
 * The template for displaying category archive pages.
 *
 * @package Yo_Takahashi
 */
?>

<?php get_header(); ?>

<header class="archive-header">
    <h1 class="archive-title">
        <?php single_cat_title(); ?>
    </h1>

    <?php
    $category_description = category_description();

    if ($category_description) :
    ?>
        <div class="archive-description">
            <?php echo wp_kses_post($category_description); ?>
        </div>
    <?php endif; ?>
</header>

<?php if (have_posts()) : ?>

    <div class="archive-posts">

        <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('archive-post'); ?>>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-featured-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('large'); ?>
                        </a>
                    </div>
                <?php endif; ?>

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

    <p><?php esc_html_e('No posts found in this category.', 'yo-takahashi'); ?></p>

<?php endif; ?>

<?php get_footer(); ?>