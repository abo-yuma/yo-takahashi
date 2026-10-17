<?php get_header(); ?>

<div class="site-content">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <article <?php post_class(); ?>>
                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <?php the_content(); ?>
            </article>

        <?php endwhile; ?>
    <?php else : ?>

        <p><?php esc_html_e('No content found.', 'yo23-takahashi'); ?></p>

    <?php endif; ?>
</div>

<?php get_footer(); ?>