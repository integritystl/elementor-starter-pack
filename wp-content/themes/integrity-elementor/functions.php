<?php 
	 add_action( 'wp_enqueue_scripts', 'integrity_elementor_enqueue_styles' );
	 function integrity_elementor_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 ?>