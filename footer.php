</main><!-- #main -->

<footer id="footer" class="site-footer">
    <div class="site-footer-content">
        <div class="site-footer-copyright">
            <p>
                <span aria-hidden="true">🌐</span>
                Reserved for Future Sale &middot;
                &copy;
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php echo esc_html(wp_parse_url(home_url('/'), PHP_URL_HOST)); ?>
                </a>
                &middot;
                <a href="<?php echo esc_url('mailto:' . sanitize_email(get_option('admin_email'))); ?>">
                    Inquiries Welcome
                </a>
            </p>
        </div><!-- .site-footer-copyright -->
    </div><!-- .site-footer-content -->
</footer><!-- #footer -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>
</body>

</html>