<?php
/**
 * Fancy Lab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fancy Lab
 */

/**
 * Enqueue files for the TGM PLugin Activation library.
 */
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';

/**
 * Enqueue scripts for demo data using One Click Demo Import library.
 */
require_once get_template_directory() . '/demo-data/ocdi.php';

/**
 * Enqueue WP Bootstrap Navwalker library (responsive menu).
 */
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Customizer additions.
 */
require_once get_template_directory() . '/inc/customizer.php';

/**
 * Enqueue scripts and styles.
 */
function fancy_lab_scripts(){
	//Bootstrap javascript and CSS files
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.3.1', 'all' );

	// Theme's main stylesheet	
	wp_enqueue_style( 'fancy-lab-style', get_stylesheet_uri(), array(), '1.5', false);

	// Google Fonts
	wp_enqueue_style( 'rajdhani', 'https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|Seaweed+Script' );	

	// Flexlider javascript and CSS files
	wp_enqueue_script( 'flexslider-min-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true );
	wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array(), '', 'all' );
	wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', array( 'jquery' ), '', true );	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}	
}
add_action( 'wp_enqueue_scripts', 'fancy_lab_scripts' );

if ( ! function_exists( 'fancy_lab_config' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fancy_lab_config(){

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'fancy_lab_main_menu' 	=> esc_html__( 'Fancy Lab Main Menu', 'fancy-lab' ),
				'fancy_lab_footer_menu' => esc_html__( 'Fancy Lab Footer Menu', 'fancy-lab' )
			)
		);

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Fancy Lab, use a find and replace
		 * to change 'fancy-lab' to the name of your theme in all the template files.
		 */
		$textdomain = 'fancy-lab';
		load_theme_textdomain( $textdomain, get_stylesheet_directory() . '/languages/' );
		load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// This theme is WooCommerce compatible, so we're adding support to WooCommerce
		add_theme_support( 'woocommerce', array(
			'thumbnail_image_width' => 255,
			'single_image_width'    => 255,
	        'product_grid'          => array(
	            'default_rows'    => 10,
	            'min_rows'        => 5,
	            'max_rows'        => 10,
	            'default_columns' => 1,
	            'min_columns'     => 1,
	            'max_columns'     => 1,
	        ),
		) );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 85,
			'width'       => 160,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */		
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'fancy-lab-slider', 1920, 800, array( 'center', 'center' ) );
		add_image_size( 'fancy-lab-blog', 960, 640, array( 'center', 'center' ) );
		if ( ! isset( $content_width ) ) {
			$content_width = 600;
		}

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */		
		add_theme_support( 'title-tag' );	
	}
endif;
add_action( 'after_setup_theme', 'fancy_lab_config', 0 );

/**
 * If WooCommerce is active, we want to enqueue a file
 * with a couple of template overrides
 */
if( class_exists( 'WooCommerce' ) ){
	require get_template_directory() . '/inc/wc-modifications.php';
}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'fancy_lab_woocommerce_header_add_to_cart_fragment' );
function fancy_lab_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<span class="items"><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></span>
	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 */
add_action( 'widgets_init', 'fancy_lab_sidebars' );
function fancy_lab_sidebars(){
	register_sidebar( array(
		'name'          => esc_html__( 'Fancy Lab Main Sidebar', 'fancy-lab' ),
		'id'            => 'fancy-lab-sidebar-1',
		'description'   => esc_html__( 'Drag and drop your widgets here.', 'fancy-lab' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Shop', 'fancy-lab' ),
		'id'            => 'fancy-lab-sidebar-shop',
		'description'   => esc_html__( 'Drag and drop your widgets here.', 'fancy-lab' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 1', 'fancy-lab' ),
		'id'            => 'fancy-lab-sidebar-footer1',
		'description'   => esc_html__( 'Drag and drop your widgets here.', 'fancy-lab' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 2', 'fancy-lab' ),
		'id'            => 'fancy-lab-sidebar-footer2',
		'description'   => esc_html__( 'Drag and drop your widgets here.', 'fancy-lab' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 3', 'fancy-lab' ),
		'id'            => 'fancy-lab-sidebar-footer3',
		'description'   => esc_html__( 'Drag and drop your widgets here.', 'fancy-lab' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );	
}

/**
 * Adds custom classes to the array of body classes.
 */
function fancy_lab_body_classes( $classes ) {

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'fancy-lab-sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	if ( ! is_active_sidebar( 'fancy-lab-sidebar-shop' ) ) {
		$classes[] = 'no-sidebar-shop';
	}

	if ( ! is_active_sidebar( 'fancy-lab-sidebar-footer1' ) && ! is_active_sidebar( 'fancy-lab-sidebar-footer2' ) && ! is_active_sidebar( 'fancy-lab-sidebar-footer3' ) ) {
		$classes[] = 'no-sidebar-footer';
	}

	return $classes;
}
add_filter( 'body_class', 'fancy_lab_body_classes' );

/**
 * Adds a shim to wp_body_open backwards compatibility
 */
if ( ! function_exists( 'wp_body_open' ) ) {
	function wp_body_open() {
			do_action( 'wp_body_open' );
	}
}