<?php

function majestic_files(){
	wp_enqueue_style('majestic_main_styles', get_stylesheet_uri());
    //wp_enqueue_style('bootstrap', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    wp_enqueue_style( 'wp-google-fonts', 'https://fonts.googleapis.com/css?family=Charm:400,700&subset=latin-ext', false ); 
	//wp_enqueue_script('bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array(), '4.1.3', true);
}
add_action('wp_enqueue_scripts','majestic_files');

function majestic_features(){
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'majestic_features');

//Custom Logo
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 80,
        'width'       => 340,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

function footerOne() {
    register_sidebar( array(
        'name'          => __( 'Footer One', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'footerOne' );

function footerTwo() {
    register_sidebar( array(
        'name'          => __( 'Footer Two', 'textdomain' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'footerTwo' );

function footerThree() {
    register_sidebar( array(
        'name'          => __( 'Footer Three', 'textdomain' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'footerThree' );