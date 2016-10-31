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

require_once( plugin_dir_path( __FILE__ ) . 'cpt.php' );   
require_once( plugin_dir_path( __FILE__ ) . 'shortcode.php' );   


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

//require_once( plugin_dir_path( __FILE__ ) . 'class-elit-c3-chart.php' );
//$chart = new Elit_C3_Chart( $post );
//$chart.init();

