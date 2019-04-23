<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jahok
 */
$class[] = 'col-lg-4 col-sm-6 col-12 mt-30';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $class ); ?>>
    <?php jahok_post_thumbnail(); ?>
    <div class="entry-header">
        <?php

        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );


        if ( 'post' === get_post_type() ) :
            ?>
            <div class="entry-meta">
                <?php
                jahok_posted_on();
                //jahok_posted_by();
                jahok_entry_footer();
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
</article><!-- #post-<?php the_ID(); ?> -->