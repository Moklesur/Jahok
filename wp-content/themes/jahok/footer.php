<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jahok
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <?php
                    wp_nav_menu( array(
                            'theme_location'    => 'footer-menu',
                            'container'			=> 'div',
                            'container_class'	=> '',
                            'container_id'		=> '',
                            'menu_class'		=> 'navbar-nav ml-auto',
                            'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
                            'walker'			=> new WP_Bootstrap_Navwalker()
                        )
                    ); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="social-links d-inline-block">
                        <ul class="list-inline m-0">
                            <li class="list-inline-item">
                                <a href="#"><i class="icofont-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="icofont-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="icofont-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="icofont-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="site-info">
                        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jahok' ) ); ?>">
                            <?php
                            /* translators: %s: CMS name, i.e. WordPress. */
                            printf( esc_html__( 'Proudly powered by %s', 'jahok' ), 'WordPress' );
                            ?>
                        </a>
                        <span class="sep"> | </span>
                        <?php
                        /* translators: 1: Theme name, 2: Theme author. */
                        printf( esc_html__( 'Theme: %1$s by %2$s.', 'jahok' ), 'jahok', '<a href="http://underscores.me/">Underscores.me</a>' );
                        ?>
                    </div><!-- .site-info -->
                </div>
            </div>
        </div>


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
