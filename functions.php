<?php
// jQuery
function jquerystarter_enqueue_styles() {
    wp_enqueue_script( 'swpboots-jquery-script', get_template_directory_uri() . '/jquery/jquery-3.1.1.min.js' );
}

add_action( 'wp_enqueue_scripts', 'jquerystarter_enqueue_styles' );


// Bootstrap
function bootstrapstarter_enqueue_styles() {
    wp_enqueue_style( 'swpboots-bootstrap-style', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'swpboots-style', get_template_directory_uri() . '/style.css' );
}

function bootstrapstarter_enqueue_scripts() {
    wp_enqueue_script('swpboots-bootstrap-js', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', '3.3.6', false );
}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );


// FontAwesome
function fontawesomestarter_enqueue_styles() {
    wp_enqueue_style( 'swpboots-fontawesome-style', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css' );
}

add_action( 'wp_enqueue_scripts', 'fontawesomestarter_enqueue_styles' );







/**
 * Register a new menu.
 *
 *
 */

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );







/*
* Customizer logo
*/
function swpboots_theme_customizer( $wp_customize ) {
    // Fun code will go here
    $wp_customize->add_section( 'swpboots_logo_section' , array(
    'title'       => __( 'Logo', 'swpboots' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );

    $wp_customize->add_setting( 'swpboots_logo' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'swpboots_logo', array(
        'label'    => __( 'Logo', 'swpboots' ),
        'section'  => 'swpboots_logo_section',
        'settings' => 'swpboots_logo',
    ) ) );

}
add_action( 'customize_register', 'swpboots_theme_customizer' );






/**
 * Register a widge areas.
 *
 */
function swpboots_footer_widgets_init() {

	register_sidebar( array(
		'name'          => 'Main Sidebar',
		'id'            => 'main_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'swpboots_footer_widgets_init' );
