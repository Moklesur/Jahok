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
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                    $args  = array(
                        'post_type'      => 'post',
                        'post_status'    => 'publish',
                        'order'          => 'ASC',
                        'hide_empty'     => 1,
                        'posts_per_page' => -1
                    );
                    $query = new WP_Query( $args );

                    if ( $query->have_posts() ) :

                        if ( is_home() && ! is_front_page() ) :
                            ?>
                            <div>
                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                            </div>
                        <?php
                        endif;

                        /* Start the Loop */
                        while ( $query->have_posts() ) :
                            $query->the_post();

                            /*
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', get_post_type() );

                        endwhile;

                        the_posts_navigation();

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
                </div>
            </div>
        </div>
    </main><!-- #main -->

<?php
//get_sidebar();
get_footer();