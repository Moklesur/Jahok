<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jahok
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

<?php
    global $post;
    $tags = wp_get_post_tags($post->ID);
    if ($tags) {
    echo '<h2 class="widget-title">Related Posts</h2>';
    $first_tag = $tags[0]->term_id;
    $args=array(
    'tag__in' => array($first_tag),
    'post__not_in' => array($post->ID),
    'posts_per_page'=>5,
    'caller_get_posts'=>1
    );
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>

<?php
endwhile;
}
wp_reset_query();
}?>
</aside><!-- #secondary -->
