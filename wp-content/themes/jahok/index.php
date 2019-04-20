<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jahok
 */

get_header();
?>

    <main id="main" class="site-main">
        <!-- Blog Section Start -->
        <div class="blog-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-12">
                      <?php
                        if ( have_posts() ) :?>
                        <div class="row">
                           <?php  if ( is_home() && ! is_front_page() ) :
                                ?>
                                <div>
                                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                </div>
                            <?php
                            endif;
                            /* Start the Loop */

                            while ( have_posts() ) :
                                the_post(); ?>

                                <div class="col-xs-12 col-sm-6 mb-30">
                                    <div class="blog-post">
                                        <?php
                                        $thumbnail_url = get_the_post_thumbnail_url();
                                        $post_terms = get_the_terms( get_the_ID(), 'category' );
                                          if($thumbnail_url):?>
                                        <div class="thumb fix mb-4">
                                            <a href="<?php echo esc_url( get_the_permalink() ); ?>"><img src="<?php echo $thumbnail_url; ?>" alt="Thumbnail"></a>
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

                                            <a href="<?php echo esc_url( get_the_permalink() ); ?>" ><h2 class="text-capitalize">
                                                   <?php echo the_title();?>
                                                </h2></a>
                                            <div class="divider"><hr class="line"></div>
                                            <p class="mb-10">
                                              <?php the_excerpt(); ?>
                                            </p>
                                            <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="read-more">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Blog Post -->

                            <?php
                            endwhile;
                            the_posts_navigation();

                            ?>
                        </div>
                         <?php
                        else :
                            get_template_part( 'template-parts/content', 'none' );

                        endif;
                        ?>





                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                         <?php get_sidebar();?>
                    </div>
                </div>


            </div>
        </div>
        <!-- Blog Section End -->

    </main><!-- #main -->

<?php

get_footer();
