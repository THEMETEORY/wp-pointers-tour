<?php namespace GM;
/**
 * Plugin Name: Pointers Tour (WPSE 162794)
 * Description: A plugin to create an help tour using WP pointer jQuery plugin
 * Plugin URI: http://wordpress.stackexchange.com/questions/162794/
 * Author: Giuseppe Mazzapica
 * Author URI: https://gm.zoomlab.it
 * License: GPLv3
 * Version: 1.0.0
 *
 */
 
/*
Copyright (C) 2014 Giuseppe Mazzapica

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/

require_once plugin_dir_path( __FILE__ ) . 'PointersManagerInterface.php';
require_once plugin_dir_path( __FILE__ ) . 'PointersManager.php';

add_action( 'admin_enqueue_scripts', function( $page ) {
  $file = plugin_dir_path( __FILE__ ) . 'pointers.php';
  // Arguments: pointers php file, version (dots will be replaced), prefix
  $manager = new PointersManager( $file, '5.0', 'custom_admin_pointers' );
  $manager->parse();
  $pointers = $manager->filter( $page );
  if ( empty( $pointers ) ) { // nothing to do if no pointers pass the filter
    return;
  }
  wp_enqueue_style( 'wp-pointer' );
  $js_url = plugins_url( 'pointers.js', __FILE__ );
  wp_enqueue_script( 'custom_admin_pointers', $js_url, array('wp-pointer'), NULL, TRUE );
  // data to pass to javascript
  $data = array(
    'next_label'  => __( 'Next' ),
    'close_label' => __('Close'),
    'pointers'    => $pointers
  );
  wp_localize_script( 'custom_admin_pointers', 'MyAdminPointers', $data );
} );