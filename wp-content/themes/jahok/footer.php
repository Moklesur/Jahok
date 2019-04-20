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

	<footer class="site-footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p><?php esc_html_e( 'Proudly powered by Jahok', 'jahok' )?></p>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
