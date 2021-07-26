<?php

if (!function_exists('iap_setup') ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function iap_setup() {
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
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(343, 235, true);

		// Menu locations
		register_nav_menus(
			array(
				'menu' => __( 'Header', 'wpproject' ),
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'width'       => 160,
				'height'      => 41,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);
    }
endif;
add_action( 'after_setup_theme', 'iap_setup' );

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/dist/css/style.css' );

    wp_enqueue_style( 'font-google', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Poppins:wght@600&display=swap', false ); 
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

add_theme_support(
    'custom-logo',
    array(
        'width'       => 160,
        'height'      => 41,
        'flex-width'  => false,
        'flex-height' => false,
    )
);

add_theme_support('post-thumbnails');
        set_post_thumbnail_size(343, 235, true);

// Menu locations
register_nav_menus(
    array(
        'menu' => __( 'Header', 'wpproject' ),
    )
);

function wpproj_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'wpproject' ),
			'id'            => 'footer-0',
			'description'   => __( 'Add widgets here to appear in your footer.', 'iap' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'wpproject' ),
			'id'            => 'footer-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'iap' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'wpproject' ),
			'id'            => 'footer-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'iap' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 3', 'wpproject' ),
			'id'            => 'footer-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'iap' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

    register_sidebar(
		array(
			'name'          => __( 'Footer 4', 'wpproject' ),
			'id'            => 'footer-4',
			'description'   => __( 'Add widgets here to appear in your footer.', 'iap' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

    register_sidebar(
		array(
			'name'          => __( 'Footer 5', 'wpproject' ),
			'id'            => 'footer-5',
			'description'   => __( 'Add widgets here to appear in your footer.', 'iap' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

    register_sidebar(
		array(
			'name'          => __( 'Footer 6', 'wpproject' ),
			'id'            => 'footer-6',
			'description'   => __( 'Add widgets here to appear in your footer.', 'iap' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'wpproject' ),
			'id'            => 'sidebar',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'iap' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="sidebar-title">',
			'after_title'   => '</h2>',
		)
	);

	
}
add_action( 'widgets_init', 'wpproj_widgets_init' );