<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jahok
 */
$class[] = 'col-lg-4 col-sm-6 col-12 mt-30 blog-posts';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $class ); ?>>
    <div class="post-grid">
        <?php jahok_post_thumbnail(); ?>
        <div class="entry-header">
            <?php

            if ( 'post' === get_post_type() ) :
                ?>
                <div class="entry-meta">
                    <?php
                    jahok_posted_on();
                    //jahok_posted_by();
                    jahok_entry_footer();
                    ?>
                </div><!-- .entry-meta -->
            <?php endif;
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            ?>
        </div><!-- .entry-header -->
    </div>
</article><!-- #post-<?php the_ID(); ?> -->