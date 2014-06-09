<?php
/**
 * WIDGET AREAS
 * Creates spaces for theme widgets (Appearance > Widgets)
 * ----------------------------------------------------------------------------
 */

// Sidebar Widgets
$sidebars = array('Sidebar');
foreach ($sidebars as $sidebar) {
  register_sidebar(array('name'=> $sidebar,
    'before_widget' => '<aside class="%2$s" role="widget">',
    'after_widget' => '</aside>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
}

// Footer Widgets
$sidebars = array('Footer');
foreach ($sidebars as $sidebar) {
  register_sidebar(array('name'=> $sidebar,
    'before_widget' => '<article class="%2$s" role="widget">',
    'after_widget' => '</article>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
}

?>