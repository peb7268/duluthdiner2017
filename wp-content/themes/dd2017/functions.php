<?php

function dd_register_nav_menus() {
  register_nav_menus(array('diner-menu' => __( 'Diner Menu' )));
}

function add_custom_image_sizes(){
  add_image_size( 'grid-size', 225, 225, true);
  add_image_size( 'specials-size', 250, 175, true);
  add_image_size( 'home-specials-size', 845, 400, true);
  add_image_size( 'menu-special-size', 800, 400, true);
  add_image_size( 'menu-banner-size', 1200, 250, true);

}

function init_admin(){
  add_theme_support('post-thumbnails');
  add_custom_image_sizes();
  dd_register_nav_menus();
}

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

add_action( 'init', 'init_admin' );
