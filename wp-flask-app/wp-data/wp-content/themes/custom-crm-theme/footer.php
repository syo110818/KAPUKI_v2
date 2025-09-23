<?php
/**
 * The template for displaying the footer.
 *
 * Closes the main content container opened in header.php and outputs
 * a simple footer bar. Also includes the wp_footer() call needed by
 * many WordPress plugins and themes.
 *
 * @package Custom_CRM_Theme
 */
?>

    </main><!-- #primary -->
</div><!-- #site-container -->

<footer id="colophon" class="site-footer">
    <div class="footer-inner">
        <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
    </div>
</footer>
</body>
</html>