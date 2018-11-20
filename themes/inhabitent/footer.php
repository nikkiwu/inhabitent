<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */
?>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        <div class="widget-container">
            <div class="widget-area">
                <h3>Contact Info</h3>
                <p>
                    <i class="fas fa-envelope fa-lg" aria-hidden="true"></i>
                    <a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
                </p>
                <p>
                    <i class="fas fa-phone" aria-hidden="true"></i>
                    <a href="tel:7784567891">778-456-7891</a>
                </p>
                <p>
                    <i class="fab fa-facebook-square fa-lg"></i>
                    <i class="fab fa-twitter-square fa-lg"></i>
                    <i class="fab fa-google-plus-square fa-lg"></i>
                </p>
            </div>

            <div class="footer-block-item">
                <div class="business-hours">
                    <h3>Business Hours</h3>
                    <p>
                        <span class="day-of-week">Monday-Friday:</span>
                        9am to 5pm
                    </p>
                    <p>
                        <span class="day-of-week">Saturday:</span>
                        10am to 2pm
                    </p>
                    <p>
                        <span class="day-of-week">Sunday:</span>
                        Closed
                    </p>
                </div>
                <div class="footer-block-item"></div>
            </div>

        </div>

        <div class="footer-logo">
            <a href="/inhabitent/wordpress" rel="home">
                <img src= <?php echo esc_url(get_template_directory_uri()) . "/source/logos/inhabitent-logo-text.svg"; ?> alt="Inhabitent
                     Logo Text"/>
            </a>
        </div>
        <div class="copyright">Copyright &copy; 2018 Inhabitent</div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>



