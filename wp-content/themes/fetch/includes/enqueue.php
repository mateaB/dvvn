<?php 

/**
 * Enqueue scripts and styles.  
 */
function fetch_scripts() {      
	wp_enqueue_style( 'fetch-kanit', fetch_theme_font_url('Kanit:300,400,500,600,700,800,900'), array(), 20141212 );
	wp_enqueue_style( 'fetch-lato', fetch_theme_font_url('Lato:300,400,700,900'), array(), 20141212 );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), 20150224 );
	wp_enqueue_style( 'jquery-flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), 20150224 );
	wp_enqueue_style( 'fetch-style', get_template_directory_uri() . '/style.css');

	wp_enqueue_script( 'fetch-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'fetch-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );   
	}

	wp_enqueue_script( 'jquery-flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '2.4.0', true );
	wp_enqueue_script( 'fetch-custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true );
	
}
add_action( 'wp_enqueue_scripts', 'fetch_scripts' );       

/**
 * Register Google fonts.
 *
 * @return string
 */
function fetch_theme_font_url($font) {       
	$font_url = '';
	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Font, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Font: on or off', 'fetch' ) ) {   
		$font_url = esc_url( add_query_arg( 'family', urlencode($font), "//fonts.googleapis.com/css" ) );
	}

	return $font_url;
}

function fetch_admin_enqueue_scripts( $hook ) {  
	//if( strpos($hook, 'fetch_upgrade') ) {
		wp_enqueue_style( 
			'font-awesome', 
			get_template_directory_uri() . '/css/font-awesome.min.css', 
			array(), 
			'4.3.0', 
			'all' 
		);
		wp_enqueue_style( 
			'fetch-admin', 
			get_template_directory_uri() . '/admin/css/admin.css', 
			array(), 
			'1.0.0', 
			'all' 
		);
	//}
	wp_enqueue_script( 
		'fetch-customizer-script', 
		get_template_directory_uri() . '/js/admin-custom.js',
		array('jquery'),
		'1.0.0',
		true
	);
}
add_action( 'admin_enqueue_scripts', 'fetch_admin_enqueue_scripts' );