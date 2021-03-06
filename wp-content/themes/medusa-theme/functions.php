<?php

if ( ! function_exists( 'medusa_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function medusa_setup() {


		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);


		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'twentytwentyone' ),
				'footer'  => __( 'Secondary menu', 'twentytwentyone' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

	}
}
add_action( 'after_setup_theme', 'medusa_setup' );
/* Calculate classes for the main <html> element.
 *
 */
function medusa_html_classes() {
	$classes = apply_filters( 'medusa_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

/**
 * Enqueue scripts and styles.
 */
function medusa_scripts() {

	wp_enqueue_style( 'medusa-custom-styles', get_template_directory_uri() . '/assets/css/custom-styles.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'medusa-uikit', get_template_directory_uri() . '/assets/css/uikit.min.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'medusa-uikit-rtl', get_template_directory_uri() . '/assets/css/uikit-rtl.min.css', array(), wp_get_theme()->get( 'Version' ) );
	
	wp_enqueue_script(
		'medusa-uikit-script',
		get_template_directory_uri() . '/assets/js/uikit.min.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_enqueue_script(
		'medusa-uikit-icons-script',
		get_template_directory_uri() . '/assets/js/uikit-icons.min.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'medusa_scripts' );