</main><!-- #main -->

<footer id="footer" class="site-footer">

    <div class="site-footer-content">

        <div class="site-footer-copyright">
            <p>
                Copyright &copy; <?php echo esc_html(wp_date('Y')); ?>
                <?php echo esc_html(wp_parse_url(home_url('/'), PHP_URL_HOST)); ?>

            </p>
        </div><!-- .site-footer-copyright -->

    </div><!-- .site-footer-content -->

</footer><!-- #footer -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>
</body>

</html>