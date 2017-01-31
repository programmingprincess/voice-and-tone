<?php
	function theme_styles() {
		wp_enqueue_style( 'placeholder-style', get_template_directory_uri().'/style.css');
		wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style( 'main-style', get_template_directory_uri().'/css/main.css');

		wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/boostrap.min.js', array(), '3.3.7', true);
		wp_enqueue_script('jQuery', get_template_directory_uri().'/js/jquery-3.1.0.min.js', array(), '3.1.0', true);
		wp_enqueue_script('main-js', get_template_directory_uri().'/js/my.js', array(), '1.0.0', true);
	}
	add_action('wp_enqueue_scripts', 'theme_styles');

	//feed nav menu to CMS
	register_nav_menus( array(
	 'primary' => esc_html__( 'Primary', 'purdue' ),
	));

	//to add a class to menu
	class My_Walker_Nav_Menu extends Walker_Nav_Menu {
	  function start_lvl(&$output, $depth = 0, $args = Array() ) {
	    $indent = str_repeat("\t", $depth);
	    $output .= "\n$indent<ul class=\"sidebar-nav\">\n";
	  }
	}

	function theme_prefix_setup() {
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 250,
			'flex-width' => true,
		) );
	}
	add_action( 'after_setup_theme', 'theme_prefix_setup' );

	function theme_prefix_the_custom_logo() {
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
	}

?>
