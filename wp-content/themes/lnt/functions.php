<?php
/**
 * lnt functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lnt
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.3.0' );

}

if ( ! function_exists( 'lnt_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lnt_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on lnt, use a find and replace
		 * to change 'lnt' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lnt', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'lnt' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'lnt_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'lnt_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lnt_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lnt_content_width', 640 );
}
add_action( 'after_setup_theme', 'lnt_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lnt_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lnt' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lnt' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lnt_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lnt_scripts() {
	wp_enqueue_style( 'lnt-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'lnt-home', get_template_directory_uri().'/css/homeStyles.css', array(), _S_VERSION );
	wp_enqueue_style( 'lnt-Offering', get_template_directory_uri().'/css/offeringStyle.css', array(), _S_VERSION );
	wp_enqueue_style( 'lnt-register', get_template_directory_uri().'/css/register.css', array(), _S_VERSION );
	wp_enqueue_style( 'lnt-fa', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), _S_VERSION );
	wp_style_add_data( 'lnt-style', 'rtl', 'replace' );
	wp_enqueue_style( 'lnt-horizontalTab', get_template_directory_uri().'/css/horizontalTab.css', array(), _S_VERSION );
	wp_enqueue_style('lnt-globalStyle', get_template_directory_uri().'/css/globalStyle.css');
	wp_enqueue_style('lnt-contactStyle', get_template_directory_uri().'/css/contactStyle.css');
	wp_enqueue_style('lnt-stockStyle', get_template_directory_uri().'/css/stockStyle.css');
	wp_enqueue_style( 'lnt-search', get_template_directory_uri().'/css/Search.css', array(), _S_VERSION );
	wp_enqueue_style( 'lnt-accordian', get_template_directory_uri().'/css/accordian.css', array(), _S_VERSION );

	wp_enqueue_style('lnt-blog', get_template_directory_uri().'/css/blog.css', array(), _S_VERSION );
	
	wp_enqueue_style('lnt-podcastStyle', get_template_directory_uri().'/css/podcastStyle.css', array(), _S_VERSION);

	wp_enqueue_script( 'lnt-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'lnt-script', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'lnt-tabs', get_template_directory_uri() . '/js/Tabs.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'lnt-serachscript', get_template_directory_uri() . '/js/search.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'lnt-blog', get_template_directory_uri() . '/js/blog.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'lnt-podcast', get_template_directory_uri() . '/js/podcast.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'lnt-resource', get_template_directory_uri().'/css/resourceStyle.css', array(), _S_VERSION );
	
	wp_enqueue_style( 'lnt-bootstrapcore', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css", array(), _S_VERSION );

	wp_enqueue_style( 'lnt-bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), _S_VERSION );
}
add_action( 'wp_enqueue_scripts', 'lnt_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

