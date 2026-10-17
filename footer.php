</main>

<footer class="site-footer">

    <div class="site-footer-content">

        <section class="site-footer-contact">
            <h4><?php esc_html_e('Contact', 'yo23-takahashi'); ?></h4>

            <ul>
                <li>
                    <a href="mailto:yo23takahashi@gmail.com">
                        yo23takahashi@gmail.com
                    </a>
                </li>
            </ul>
        </section>

        <section class="site-footer-related">
            <h4><?php esc_html_e('Related Links', 'yo23-takahashi'); ?></h4>

            <ul>
                <li>
                    <a href="https://yo23interpreter.yo23takahashi.com" target="_blank" rel="noopener noreferrer">
                        Thai-Japanese Interpreter
                    </a>
                </li>
                <li>
                    <a href="concentrate" target="_blank" rel="noopener noreferrer">
                        Concentrate Your Mind
                    </a>
                </li>
            </ul>
        </section>

        <div class="site-footer-copyright">
            <p>
                Copyright &copy; <?php echo esc_html(date('Y')); ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php echo esc_html(wp_parse_url(home_url('/'), PHP_URL_HOST)); ?>
                </a>
                Powered by Yuma Takahashi.
            </p>
        </div>

    </div>

</footer>

</div>

<?php wp_footer(); ?>
</body>

</html>