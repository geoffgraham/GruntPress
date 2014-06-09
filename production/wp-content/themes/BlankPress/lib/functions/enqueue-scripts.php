<?php
/**
 * ENQUEUE SCRIPTS
 * Injects theme javascript files to the document
 * Load additional scripts using the same method
 * Reference: http://codex.wordpress.org/Function_Reference/wp_enqueue_script
 * ----------------------------------------------------------------------------
 */

if (!function_exists('blankpress_scripts')) :
  function blankpress_scripts() {

    // deregister the jquery version bundled with wordpress
    wp_deregister_script( 'jquery' );

    // enqueue modernizr, jquery and foundation
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/lib/javascripts/modernizr-min.js', false ,'1.0', false );
    
    // enqueue jquery (if not already included in global)
    // wp_enqueue_script( 'jquery', get_template_directory_uri() . '/lib/jjavascripts/jquery-min.js', false ,'1.0', true );
    
    // enqueue global
    wp_enqueue_script( 'global', get_template_directory_uri() . '/lib/javascripts/global-min.js', true ,'1.0', true );
  
  }

  add_action( 'wp_enqueue_scripts', 'blankpress_scripts' );
endif;

?>