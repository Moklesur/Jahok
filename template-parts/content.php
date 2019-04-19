<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jahok
 */
$class[] = 'boxes';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $class ); ?>>
    <div class="row">
        <?php jahok_post_thumbnail(); ?>
        <div class="col-lg-9 col-12">
            <div class="post-content-wrap">
                <div class="entry-header">
                    <?php
                    if ( is_singular() ) :
                        the_title( '<h1 class="entry-title">', '</h1>' );
                    else :
                        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    endif;

                    if ( 'post' === get_post_type() ) :
                        ?>
                        <div class="entry-meta d-none">
                            <?php
                            //jahok_posted_on();
                            //jahok_posted_by();
                            ?>
                        </div><!-- .entry-meta -->
                    <?php endif; ?>
                </div><!-- .entry-header -->
                <div class="entry-content">
                    <?php
                    the_content( sprintf(
                        wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'jahok' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    ) );

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jahok' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div><!-- .entry-content -->
                <div class="entry-footer">
                    <a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php esc_html_e( 'Visit Website', 'jahok' ); ?></a>
                    <?php //jahok_entry_footer(); ?>
                </div><!-- .entry-footer -->
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
