<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jahok
 */
$class[] = 'single-posts mt-30';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $class ); ?>>

    <div class="entry-header">
        <?php
        the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );

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
        jahok_post_thumbnail();

        the_content();
        ?>
    </div><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->