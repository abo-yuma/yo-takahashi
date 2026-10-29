<?php

/**
 * The template for displaying 404 pages (not found).
 *
 * @package Yo_Takahashi
 */
?>

<?php get_header(); ?>

<article class="page-content">

    <header class="entry-header">
        <h1 class="page-title">
            <?php esc_html_e('Page Not Found', 'yo-takahashi'); ?>
        </h1>
    </header>

    <div class="entry-content">
        <p>
            <?php esc_html_e('Sorry, the page you are looking for could not be found.', 'yo-takahashi'); ?>
        </p>

        <p>
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php esc_html_e('Return to the homepage', 'yo-takahashi'); ?>
            </a>
        </p>
    </div>

</article>

<?php get_footer(); ?>