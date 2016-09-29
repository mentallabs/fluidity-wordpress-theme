<!doctype html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />

    <title><?php bloginfo('name'); ?> » <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <link media="screen,projection" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--[if IE]>
    <link rel="stylesheet" href="ie.css" type="text/css" />
    <![endif]-->
    <?php
         wp_head();
    ?>
</head>

<body>
        <div id="fixed-nav" class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                   <?php
                        // check to see if the logo exists and add it to the page
                        if ( get_theme_mod( 'theme_logo' ) ) : ?>

                        <img class="brand-logo" src="<?php echo get_theme_mod( 'theme_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >

                        <?php // add a fallback if the logo doesn't exist
                        else : ?>

                        <a href="<?php bloginfo('url'); ?>"><span id="brand-text" style="padding-left: 10px;" class="brand-logo"><?php bloginfo('name'); ?></span></a>

                    <?php endif; ?>

                    <a href="#" data-activates="mobile-nav" class="button-collapse"><i id="menu-icon" class="material-icons">menu</i></a>

                    <?php wp_nav_menu(array( 'menu' => 'main', 'menu_class' => 'right hide-on-med-and-down table-of-contents', 'menu_id' => 'nav-mobile', 'container' => false, 'theme_location' => 'primary-menu', 'show_home' => '0')); ?>

                </div><!--navbar content-->
            </nav><!--navbar-->
        </div>

                <section style="<?php if ( 0 < count( strlen( ( $background_image_url = get_theme_mod( 'header_bg' ) ) ) ) ) { ?>
                        background-image: url( <?php echo $background_image_url; ?> );
                <?php } // end if ?>" id="home" class="scrollify-section scrollspy">

                    <div class="h1-wrapper text-center valign-wrapper center">
                        <div style="width: 100%; overflow: hidden;" class="container col s12">
                            <div class="row">
                                <div id="caps" class="col s12">
                                        <?php
                                            // check to see if the text exists and add it to the page
                                            if ( get_theme_mod( 'header_h1' ) ) : ?>

                                            <h1> <?php echo get_theme_mod( 'header_h1' ); ?> </h1>

                                            <?php // add a fallback if the logo doesn't exist
                                            else : ?>

                                            <h1><?php bloginfo('name'); ?></h1>

                                        <?php endif; ?>

                                        <?php
                                            // check to see if the text exists and add it to the page
                                            if ( get_theme_mod( 'header_h3' ) ) : ?>

                                            <h3> <?php echo get_theme_mod( 'header_h3' ); ?> </h3>

                                            <?php // add a fallback if the logo doesn't exist
                                            else : ?>

                                            <h3><?php bloginfo('description'); ?></h3>

                                        <?php endif; ?>

                                        <?php
                                            // check to see if the text exists and add it to the page
                                            if ( get_theme_mod( 'header_slogan' ) ) : ?>

                                            <h5> <?php echo get_theme_mod( 'header_slogan' ); ?> </h5>

                                        <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <a id="down" href="#services" class="btn-floating btn-large waves-effect waves-light"><i class="large material-icons">keyboard_arrow_down</i></a>
                    </div>
                </section><!--header image-->

