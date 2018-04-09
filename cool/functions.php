<?php

require_once('class-wp-bootstrap-navwalker.php');

function cleancut_theme_support(){
  // Post thumbnail
  add_theme_support('post-thumbnails');

  register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'Main' ),
  'footer' => __( 'Footer Menu', 'Footer' )
  ) );
}

add_action('after_setup_theme', 'cleancut_theme_support');


// Widget locations
function init_witdgets($id) {
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class="card">',
    'after_widget' => '</div>
  </div>',
    'before_title' => '<h3 class="card-header">',
    'after_title' => '</h3>
    <div class="card-body">',
  ));
}

add_action('widgets_init', 'init_witdgets');

require get_template_directory().'/inc/customizer.php';
