<?php

if ( ! function_exists( 'wp_knapsack_setup' ) ) :

function wp_knapsack_setup() {
	load_theme_textdomain( 'wp_knapsack', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );

    if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
    }
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'wp_knapsack' ),
        'secondary'=> esc_html__( 'Secondary', 'wp_knapsack' ),
        'tertiary'=> esc_html__( 'Tertiary', 'wp_knapsack' ),
	) );
    //custom header
    $defaults = array(
        'default-image'          => get_template_directory_uri() . '/images/knacsnap_logo.png',
        'width'                  => 500,
        'height'                 => 70,
        'flex-height'            => true,
        'flex-width'             => true,
        'uploads'                => true,
        'random-default'         => false,
        'header-text'            => true,
        'default-text-color'     => '',
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
    );
    add_theme_support( 'custom-header', $defaults );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	add_theme_support( 'custom-background', apply_filters( 'wp_knapsack_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );


}
endif;
add_action( 'after_setup_theme', 'wp_knapsack_setup' );


remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<div id="main" class="container">';
}

function my_theme_wrapper_end() {
    echo '</div>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
//recent product tab

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 60 );

remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
add_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 20 );

add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );

require_once('wp_bootstrap_navwalker.php');

function wp_knapsack_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_knapsack_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp_knapsack_content_width', 0 );

function wp_knapsack_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Left', 'wp_knapsack' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Sidebar Left.', 'wp_knapsack' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar Right', 'wp_knapsack' ),
        'id'            => 'sidebar-2',
        'description'   => esc_html__( 'Sidebar Right.', 'wp_knapsack' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s sidebarWidgetRight">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Slider', 'wp_knapsack' ),
        'id'            => 'slider',
        'description'   => esc_html__( 'Home page slider', 'wp_knapsack' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name' => esc_html__( 'Shop page widgets', 'wp_knapsack' ),
        'id' => 'shop-1',
        'description' => esc_html__( 'shop page widget', 'wp_knapsack' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title text-center home-text">',
        'after_title' => '</h4>',
        'menu_class'    =>'widget-column',
    ) );

    register_sidebar( array(
        'name' => esc_html__( 'First Footer Widget Area', 'wp_knapsack' ),
        'id' => 'footer-1',
        'description' => __( 'The first footer widget area', 'wp_knapsack' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );

    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'wp_knapsack' ),
        'id' => 'footer-2',
        'description' => esc_html__( 'The second footer widget area', 'wp_knapsack' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );

    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'wp_knapsack' ),
        'id' => 'footer-3',
        'description' => esc_html__( 'The third footer widget area', 'wp_knapsack' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );

    register_sidebar( array(
        'name' => esc_html__( 'Fourth Footer Widget Area', 'wp_knapsack' ),
        'id' => 'footer-4',
        'description' => esc_html__( 'The fourth footer widget area', 'wp_knapsack' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Home page extra widgets', 'wp_knapsack' ),
        'id' => 'extra-1',
        'description' => esc_html__( 'Home page extra widget', 'wp_knapsack' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title text-center home-text">',
        'after_title' => '</h4>',
        'menu_class'    =>'widget-column',
    ) );

    register_sidebar( array(
        'name' => __( 'Testimonial Widget Area', 'wp_knapsack' ),
        'id' => 'testimonial',
        'description' => esc_html__( 'The testimonial widget area', 'wp_knapsack' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title text-center">',
        'after_title' => '</h4>',
    ) );
}
add_action( 'widgets_init', 'wp_knapsack_widgets_init' );


function wp_knapsack_scripts() {
	wp_enqueue_style( 'wp_knapsack-style', get_stylesheet_uri() );

	wp_enqueue_script( 'wp_knapsack-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'wp_knapsack-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_knapsack_scripts' );


require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/extras.php';

require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/jetpack.php';

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );