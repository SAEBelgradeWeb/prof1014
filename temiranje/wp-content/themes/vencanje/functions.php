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
		'footer' => __( 'Footer Lokacija', 'vencanje' )
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




// Register Custom Post Type
function register_post_types() {

	$labels = array(
		'name'                => _x( 'Sliders', 'Post Type General Name', 'vencanje' ),
		'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'vencanje' ),
		'menu_name'           => __( 'Slider', 'vencanje' ),
		'parent_item_colon'   => __( 'Parent Item:', 'vencanje' ),
		'all_items'           => __( 'All Items', 'vencanje' ),
		'view_item'           => __( 'View Item', 'vencanje' ),
		'add_new_item'        => __( 'Add New Item', 'vencanje' ),
		'add_new'             => __( 'Add New', 'vencanje' ),
		'edit_item'           => __( 'Edit Item', 'vencanje' ),
		'update_item'         => __( 'Update Item', 'vencanje' ),
		'search_items'        => __( 'Search Item', 'vencanje' ),
		'not_found'           => __( 'Not found', 'vencanje' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'vencanje' ),
	);
	$args = array(
		'label'               => __( 'book', 'vencanje' ),
		'description'         => __( 'Unos slika ', 'vencanje' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'thumbnail', 'category'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'taxonomies'		  => array('slajder'),
		'capability_type'     => 'page',
	);
	register_post_type( 'book', $args );
	$labels = array(
		'name'                => _x( 'Galerije', 'Post Type General Name', 'vencanje' ),
		'singular_name'       => _x( 'Galerija', 'Post Type Singular Name', 'vencanje' ),
		'menu_name'           => __( 'Galerija', 'vencanje' ),
		'parent_item_colon'   => __( 'Parent Item:', 'vencanje' ),
		'all_items'           => __( 'All Items', 'vencanje' ),
		'view_item'           => __( 'View Item', 'vencanje' ),
		'add_new_item'        => __( 'Add New Item', 'vencanje' ),
		'add_new'             => __( 'Dodaj', 'vencanje' ),
		'edit_item'           => __( 'Edit Item', 'vencanje' ),
		'update_item'         => __( 'Update Item', 'vencanje' ),
		'search_items'        => __( 'Search Item', 'vencanje' ),
		'not_found'           => __( 'Not found', 'vencanje' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'vencanje' ),
	);


	$args = array(
		'label'               => __( 'Galerije', 'vencanje' ),
		'description'         => __( 'Unos slika', 'vencanje' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt',  ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 6,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'Galerije', $args );

	add_image_size( 'blog_size', 332, 208, true );


	$labels = array(
		'name'                       => _x( 'Tipovi', 'Taxonomy General Name', 'vencanje' ),
		'singular_name'              => _x( 'Tip', 'Taxonomy Singular Name', 'vencanje' ),
		'menu_name'                  => __( 'Tip', 'vencanje' ),
		'all_items'                  => __( 'All Items', 'vencanje' ),
		'parent_item'                => __( 'Parent Item', 'vencanje' ),
		'parent_item_colon'          => __( 'Parent Item:', 'vencanje' ),
		'new_item_name'              => __( 'New Item Name', 'vencanje' ),
		'add_new_item'               => __( 'Add New Item', 'vencanje' ),
		'edit_item'                  => __( 'Edit Item', 'vencanje' ),
		'update_item'                => __( 'Update Item', 'vencanje' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'vencanje' ),
		'search_items'               => __( 'Search Items', 'vencanje' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'vencanje' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'vencanje' ),
		'not_found'                  => __( 'Not Found', 'vencanje' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'slajder', array( 'book' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'register_post_types', 0 );



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
		'before_widget' => '<li id="%1$s" class="widget-container">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer bar', 'vencanje' ),
		'id'            => 'footer',
		'description'   => '',
		'before_widget' => '<div id="footcol1" class="four columns"><ul><li id="%1$s" class="widget-container">',
		'after_widget'  => '</li></ul></div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'vencanje_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vencanje_scripts() {
	wp_enqueue_style( 'vencanje-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font1', "http://fonts.googleapis.com/css?family=Droid+Sans:400,700" );
	wp_enqueue_style( 'font2', "http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700" );
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
	wp_enqueue_script('prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), '1.0.0', true  );
	wp_enqueue_script('tinynav', get_template_directory_uri() . '/js/tinynav.min.js', array(), '1.0.0', true  );
	wp_enqueue_script('jqflexs', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), '1.0.0', true  );
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(''), '1.0.0', true  );
	



	



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



class My_Recent_Posts extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		// widget actual processes
		parent::__construct(
			'my_recent_posts', // Base ID
			__( 'My Recent Posts', 'vencanje' ), // Name
			array( 'description' => __( 'Nas vidzet koji prikazuje poslednje postove', 'vencanje' ), ) // Args
		);
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget

		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
		}

		$arg = array(
			'post_type' => 'post',
			'posts_per_page' => $instance['broj'],
			'category_name' => 'blog'
		);
		// The Query
		$the_query = new WP_Query( $arg );

		// The Loop
		if ( $the_query->have_posts() ) {
			echo '<ul class="rp-widget">';
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				?>	
            <li>
                <?php the_post_thumbnail( array(69,69)); ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <span class="smalldate"><?php 
                $date = get_the_date(); 
                echo $date;
                ?></span>
                <span class="clear"></span>
            </li>
 

			<?php
			}
		echo "</ul>";
		} 
		/* Restore original Post Data */
		wp_reset_postdata();
		echo $args['after_widget'];
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
		$title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'text_domain' );
		$broj = ! empty( $instance['broj'] ) ? $instance['broj'] : __( 'Unesi broj', 'text_domain' );
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'broj' ); ?>"><?php _e( 'Broj postova:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'broj' ); ?>" name="<?php echo $this->get_field_name( 'broj' ); ?>" type="text" value="<?php echo esc_attr( $broj ); ?>">
		</p>
		<?php 
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be 
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['broj'] = ( ! empty( $new_instance['broj'] ) ) ? strip_tags( $new_instance['broj'] ) : '';

		return $instance;
	}
}


add_action( 'widgets_init', function(){
     register_widget( 'My_Recent_Posts' );
});

function shortcode_kurs($attr, $content = "") {
	$boja = $attr['boja'];
	if (!$boja) $boja = "blue";
	ob_start();
?>
<h1 style="color:<?php echo $boja; ?>;"><?php echo $content; ?></h1>

<?php

$out = ob_get_clean();

	return $out;
}

add_shortcode( "kurs", "shortcode_kurs" );




// init process for registering our button
add_action('init', 'wpse72394_shortcode_button_init');
function wpse72394_shortcode_button_init() {

      //Abort early if the user will never see TinyMCE
      if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') && get_user_option('rich_editing') == 'true')
           return;

      //Add a callback to regiser our tinymce plugin   
      add_filter("mce_external_plugins", "wpse72394_register_tinymce_plugin"); 

      // Add a callback to add our button to the TinyMCE toolbar
      add_filter('mce_buttons', 'wpse72394_add_tinymce_button');
}


//This callback registers our plug-in
function wpse72394_register_tinymce_plugin($plugin_array) {
    $plugin_array['wpse72394_button'] = get_template_directory_uri() .'/js/shortcode.js';
    return $plugin_array;
}

//This callback adds our button to the toolbar
function wpse72394_add_tinymce_button($buttons) {
            //Add the button ID to the $button array
    $buttons[] = "wpse72394_button";
    return $buttons;
}
	