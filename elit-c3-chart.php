<?php 
/**
Plugin Name: Elit C3 Chart
Plugin URI: https://github.com/pjsinco/elit-c3-chart
Description: Incorporate C3 charts in posts
Version: 0.1.0
Author: Patrick Sinco
License: GPL2
*/


// if this file is called directly, abort
if (!defined('WPINC')) {
  die;
}

function elit_register_c3_chart_cpt() {

  $labels = array(
    'name'               => 'C3 Chart',
    'singular_name'      => 'C3 Chart',
    'menu_name'          => 'C3 Charts',
    'name_admin_bar'     => 'C3 Chart',
    'add_new'            => 'Add new',
    'add_new_item'       => 'Add new C3 Chart',
    'edit_item'          => 'Edit C3 Chart',
    'view_item'          => 'View C3 Chart',
    'all_items'          => 'All C3 Charts',
    'search_items'       => 'Search C3 Charts',
    'archives'           => 'C3 Charts',
    'not_found'          => 'No C3 Charts found',
    'not_found_in_trash' => 'No C3 Charts found in trash',
  );

  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'publicly_queryable'  => true,
    'exclude_from_search' => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 85,
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'has_archive'         => true,
    'rewrite'             => array( 'slug' => 'c3_chart'),
    'supports'            => array( 'title', 'revision', '' ),
  );

  register_post_type( 'elit_c3_chart', $args );

}
add_action('init' , 'elit_register_c3_chart_cpt' );

function elit_c3_chart_template( $single ) {

  global $wp_query, $post;
  if ( $post->post_type == 'elit_c3_chart' ) {
    if ( file_exists( plugin_dir_path( __FILE__ ) . 'single-elit_c3_chart.php' ) ) {
      return plugin_dir_path( __FILE__ ) . 'single-elit_c3_chart.php';   
    }
  }

  return $single;
}

add_filter( 'single_template', 'elit_c3_chart_template' );

//flush_rewrite_rules();

