<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>

            <header class="entry-header">
                <?php the_title('<h2 class="page-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>
            </header>

            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div>

        </article>

    <?php endwhile; ?>

<?php else : ?>

    <p>No content found.</p>

<?php endif; ?>

<?php get_footer(); ?>