<?php

require get_template_directory() . '/inc/customizer/fluidity-customizer.php';

//remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

function social_widgets_init(){
        if (function_exists('register_sidebar')) {

            register_sidebar(array(
                'name' => 'Social Widget',
                'id'   => 'social-widget',
                'description'   => 'This is a widgetized area.',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4>',
                'after_title'   => '</h4>'
            ));

        }
    }
add_action( 'widgets_init', 'Social_widgets_init' );

function featured_widgets_init(){
        if (function_exists('register_sidebar')) {

            register_sidebar(array(
                'name' => 'Featured Images Widget',
                'id'   => 'featured-widget',
                'description'   => 'This is a widgetized area.',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4>',
                'after_title'   => '</h4>'
            ));

        }
    }
add_action( 'widgets_init', 'featured_widgets_init' );

function portfolio_modal_widgets_init(){
        if (function_exists('register_sidebar')) {

            register_sidebar(array(
                'name' => 'Portfolio Popup Widget',
                'id'   => 'portfolio-widget',
                'description'   => 'This is a widgetized area.',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4>',
                'after_title'   => '</h4>'
            ));

        }
    }
add_action( 'widgets_init', 'portfolio_modal_widgets_init' );

function contact_widgets_init(){
        if (function_exists('register_sidebar')) {

            register_sidebar(array(
                'name' => 'Contact Widget',
                'id'   => 'contact-widget',
                'description'   => 'This is a widgetized area.',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4>',
                'after_title'   => '</h4>'
            ));

        }
    }
add_action( 'widgets_init', 'contact_widgets_init' );


function fluidity_scripts(){

    wp_enqueue_script('jquery');
    //wp_enqueue_script( 'jq', get_template_directory_uri() . '/inc/js/jquery-3.1.0.min.js', array(), '3.1.0', false );

    //wp_enqueue_script( 'scrollify-script', get_template_directory_uri() . '/inc/js/jquery.scrollify.js', array(), '1.0', false );
    //wp_enqueue_script( 'material-script', get_template_directory_uri() . '/inc/js/materialize.js', array('jq'), '1.0', false );
}
add_action('wp_enqueue_scripts', 'fluidity_scripts');

?>
