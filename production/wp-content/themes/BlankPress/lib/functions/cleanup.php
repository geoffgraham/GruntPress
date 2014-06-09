<?php
/**
 * CLEANUP FUNCTIONS
 * Strips out many of the unneeded tags and classes added by WordPress
 * Reference: http://wpengineer.com/1438/wordpress-header/
 * Head and Images
 * ----------------------------------------------------------------------------
 */

add_action('after_setup_theme','start_cleanup');

function start_cleanup() {

    // initialize cleanup
    add_action('init', 'cleanup_head');

    // remove WP version from RSS
    add_filter('the_generator', 'remove_rss_version');

    // remove injected css from recent comments widget
    add_filter( 'wp_head', 'remove_wp_widget_recent_comments_style', 1 );

    // clean up comment styles in the head
    add_action('wp_head', 'remove_recent_comments_style', 1);

    // clean up gallery output
    add_filter('gallery_style', 'gallery_style');
    
    // additional post-related cleaning
    add_filter('get_image_tag_class', 'image_tag_class', 0, 4);
    add_filter('get_image_tag', 'image_editor', 0, 4);
    add_filter( 'the_content', 'img_unautop', 30 );

} 

/**
 * Head Cleanup
 * ----------------------------------------------------------------------------
 */

function cleanup_head() {

    // EditURI link
    remove_action( 'wp_head', 'rsd_link' );

    // Category feed links
    remove_action( 'wp_head', 'feed_links_extra', 3 );

    // Post and comment feed links
    remove_action( 'wp_head', 'feed_links', 2 );
    
    // Windows Live Writer
    remove_action( 'wp_head', 'wlwmanifest_link' );

    // Index link
    remove_action( 'wp_head', 'index_rel_link' );

    // Previous link
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );

    // Start link
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );

    // Canonical
    remove_action('wp_head', 'rel_canonical', 10, 0 );

    // Shortlink
    remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

    // Links for adjacent posts
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

    // WP version
    remove_action( 'wp_head', 'wp_generator' );

    // Remove WP version from css
    add_filter( 'style_loader_src', 'remove_wp_ver_css_js', 9999 );

    // Remove WP version from scripts
    add_filter( 'script_loader_src', 'remove_wp_ver_css_js', 9999 );

    // Prevent unneccecary info from being displayed
    add_filter('login_errors',create_function('$a', "return null;"));

} 


// remove WP version from RSS
function remove_rss_version() { return ''; }

// remove WP version from scripts
function remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}

// remove injected CSS for recent comments widget
function remove_wp_widget_recent_comments_style() {
   if ( has_filter('wp_head', 'wp_widget_recent_comments_style') ) {
      remove_filter('wp_head', 'wp_widget_recent_comments_style' );
   }
}

// remove injected CSS from recent comments widget
function remove_recent_comments_style() {
  global $wp_widget_factory;
  if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
  }
}

// remove injected CSS from gallery
function gallery_style($css) {
  return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
}

/**
 * Image Cleanup
 * ----------------------------------------------------------------------------
 */

// Clean the output of attributes of images in editor
function image_tag_class($class, $id, $align, $size) {
    $align = 'align' . esc_attr($align);
    return $align;
} 

// Remove width and height in editor, for a better responsive world.
function image_editor($html, $id, $alt, $title) {
    return preg_replace(array(
            '/\s+width="\d+"/i',
            '/\s+height="\d+"/i',
            '/alt=""/i'
        ),
        array(
            '',
            '',
            '',
            'alt="' . $title . '"'
        ),
        $html);
} 

// Wrap images with figure tag 
function img_unautop($pee) {
    $pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<figure>$1</figure>', $pee);
    return $pee;
} 

?>