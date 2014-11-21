<?php
/**
 * vencanje functions and definitions
 *
 * @package vencanje
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'vencanje_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vencanje_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on vencanje, use a find and replace
	 * to change 'vencanje' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'vencanje', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'glavni' => __( 'Glavni Meni', 'vencanje' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'vencanje_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // vencanje_setup
add_action( 'after_setup_theme', 'vencanje_setup' );



add_action( 'init', 'register_post_types' );


/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function register_post_types() {
	$labels = array(
		'name'               => _x( 'Slider', 'post type general name', 'vencanje' ),
		'singular_name'      => _x( 'Image', 'post type singular name', 'vencanje' ),
		'menu_name'          => _x( 'Slider', 'admin menu', 'vencanje' ),
		'name_admin_bar'     => _x( 'Slider', 'add new on admin bar', 'vencanje' ),
		'add_new'            => _x( 'Add New', 'book', 'vencanje' ),
		'add_new_item'       => __( 'Add New Image', 'vencanje' ),
		'new_item'           => __( 'New Image', 'vencanje' ),
		'edit_item'          => __( 'Edit Image', 'vencanje' ),
		'view_item'          => __( 'View Image', 'vencanje' ),
		'all_items'          => __( 'All Images', 'vencanje' ),
		'search_items'       => __( 'Search Images', 'vencanje' ),
		'parent_item_colon'  => __( 'Parent Images:', 'vencanje' ),
		'not_found'          => __( 'No images found.', 'vencanje' ),
		'not_found_in_trash' => __( 'No images found in Trash.', 'vencanje' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slider' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'excerpt' )
	);

	register_post_type( 'book', $args );
}



/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function vencanje_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'vencanje' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'vencanje_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vencanje_scripts() {
	wp_enqueue_style( 'vencanje-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font1', get_template_directory_uri() ."http://fonts.googleapis.com/css?family=Droid+Sans:400,700" );
	wp_enqueue_style( 'font2', get_template_directory_uri() ."http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700" );
	wp_enqueue_style( 'style', get_template_directory_uri() ."/css/style.css" );
	wp_enqueue_style( 'inner', get_template_directory_uri() ."/css/inner.css" );
	wp_enqueue_style( 'layout', get_template_directory_uri() ."/css/layout.css" );
	wp_enqueue_style( 'flex', get_template_directory_uri() ."/css/flexslider.css" );
	wp_enqueue_style( 'color', get_template_directory_uri() ."/css/color.css" );
	wp_enqueue_style( 'pp', get_template_directory_uri() ."/css/prettyPhoto.css" );



	wp_enqueue_script('jquery1', get_template_directory_uri() . '/js/jquery-1.7.1.min.js', array(), '1.0.0', true  );
	wp_enqueue_script('hover', get_template_directory_uri() . '/js/hoverIntent.js', array(), '1.0.0', true  );
	wp_enqueue_script('sf', get_template_directory_uri() . '/js/superfish.js', array(), '1.0.0', true  );
	wp_enqueue_script('ss', get_template_directory_uri() . '/js/supersubs.js', array(), '1.0.0', true  );
	wp_enqueue_script('tinynav', get_template_directory_uri() . '/js/tinynav.min.js', array(), '1.0.0', true  );
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(''), '1.0.0', true  );
	wp_enqueue_script('jqflexs', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), '1.0.0', true  );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vencanje_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


