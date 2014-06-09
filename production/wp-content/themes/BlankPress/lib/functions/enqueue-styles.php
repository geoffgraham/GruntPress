<?php
/**
 * ENQUEUE STYLES
 * Injects theme styles to the document head
 * Load additional stylesheets using the same method
 * Reference: http://codex.wordpress.org/Function_Reference/wp_enqueue_style
 * ----------------------------------------------------------------------------
 */

// Load theme styles
function blankpress_styles() {
  global $wp_styles;

  // Load Stylesheet
  wp_enqueue_style( $handle, $src, $deps, $ver, $media );
  wp_enqueue_style('global', get_template_directory_uri().'/lib/styles/css/style-min.css', false ,'1.0', 'all' );

}

add_action( 'wp_enqueue_scripts', 'blankpress_styles' );

?>