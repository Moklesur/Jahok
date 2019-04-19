<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jahok
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jahok' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="top-header container">
            <div class="row">
                <div class="col-12 text-right d-lg-block d-none">
                    <div class="top-nav d-inline-block text-uppercase">
                        <ul class="list-inline m-0">
                            <li class="list-inline-item">
                                <a href="#">contact</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">ADVERTISE</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">login</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Join</a>
                            </li>
                        </ul>
                    </div>
                    <div class="social-links d-inline-block">
                        <ul class="list-inline m-0">
                            <li>
                                <a href="#"><i class="icofont-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg container main-menu">
            <div class="navbar-brand">
                <?php
                the_custom_logo();
                if ( is_front_page() && is_home() ) :
                    ?>
                    <h1 class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php
                else :
                    ?>
                    <h2 class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
                <?php
                endif;
                $jahok_description = get_bloginfo( 'description', 'display' );
                if ( $jahok_description || is_customize_preview() ) :
                    ?>
                    <p class="site-description m-0"><?php echo $jahok_description; /* WPCS: xss ok. */ ?></p>
                <?php endif; ?>
            </div><!-- .site-branding -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#jahok-navbar-collapse" aria-controls="jahok-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            wp_nav_menu( array(
                    'theme_location'    => 'menu-1',
                    'container'			=> 'div',
                    'container_class'	=> 'collapse navbar-collapse',
                    'container_id'		=> 'jahok-navbar-collapse',
                    'menu_class'		=> 'navbar-nav ml-auto',
                    'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
                    'walker'			=> new WP_Bootstrap_Navwalker()
                )
            ); ?>
            <form class="form-inline my-2 my-lg-0 position-relative d-none">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn my-2 my-sm-0 search-button" type="submit"><i class="icofont-search-2"></i></button>
            </form>

        </nav>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
