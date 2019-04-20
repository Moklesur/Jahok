<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jahok
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <!-- Blog Section Start -->
            <div class="blog-details">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 mobi-mb-50">

                            <?php
                            while ( have_posts() ) :
                                the_post();?>

                                <div class="single-post">
                                    <?php
                                    $thumbnail_url = get_the_post_thumbnail_url();
                                    $post_terms = get_the_terms( get_the_ID(), 'category' );
                                    if($thumbnail_url):?>
                                        <div class="thumb fix mb-4">
                                           <img src="<?php echo $thumbnail_url; ?>" alt="Thumbnail">
                                        </div>
                                    <?php endif; ?>
                                    <div class="content">
                                        <div class="meta-content">
                                            <?php
                                            if ( is_array( $post_terms ) ):
                                                foreach ( $post_terms as $term ) {
                                                    if ( $term ) {
                                                        ?>
                                                        <a href="<?php echo $term->slug; ?>" class="theme-color"><?php echo $term->name; ?></a>

                                                        <?php
                                                    }
                                                }
                                            endif;
                                            ?>
                                            ,
                                            <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="theme-color "><?php echo get_the_date( 'j F, Y' ); ?></a>
                                        </div>

                                        <h3 class="text-capitalize mb-20">
                                            <?php echo the_title();?>
                                        </h3>
                                        <div class="mb-30 "><?php echo the_content();?></div>

                                    </div>


                               <?php the_post_navigation();

                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                                 ?>
                                </div>

                           <?php endwhile; // End of the loop.
                            ?>


                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="sidebar pl-50">
                               <?php get_sidebar();?>
                            </div>
                        </div>
                        <!-- Sidebar End -->
                    </div>
                </div>
            </div>
            <!-- Blog Section End -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
