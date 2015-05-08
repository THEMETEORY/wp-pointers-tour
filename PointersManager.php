<?php

class PointersManager implements PointersManagerInterface {

    private $pfile;
    private $version;
    private $prefix;
    private $pointers = array();

    public function __construct( $file, $version, $prefix ) {
        $this->pfile = file_exists( $file ) ? $file : FALSE;
        $this->version = str_replace( '.', '_', $version );
        $this->prefix = $prefix;

        add_action("switch_theme", array( $this, 'deactivation' ), 10 , 2);
    }

    public function parse() {
        if ( empty( $this->pfile ) ) return;
        $pointers = (array) require_once $this->pfile;
        if ( empty($pointers) ) return;
        foreach ( $pointers as $i => $pointer ) {
          $pointer['id'] = "{$this->prefix}{$this->version}_{$i}";
          $this->pointers[$pointer['id']] = (object) $pointer;
        }
    }

    public function filter( $page ) {
        if ( empty( $this->pointers ) ) return array();
        $uid = get_current_user_id();
        $no = explode( ',', (string) get_user_meta( $uid, 'dismissed_wp_pointers', TRUE ) );
        $active_ids = array_diff( array_keys( $this->pointers ), $no );
        $good = array();
        foreach( $this->pointers as $i => $pointer ) {
          if (
            in_array( $i, $active_ids, TRUE )                   // is active
            && isset( $pointer->where )                         // has where
            && in_array( $page, (array) $pointer->where, TRUE ) // current page is in where
          ) {
              $good[] = $pointer;
          }
        }
        $count = count( $good );
        if ( $good === 0 ) return array();
        foreach( array_values( $good ) as $i => $pointer ) {
         $good[$i]->next = $i+1 < $count ? $good[$i+1]->id : '';
        }
        return $good;
    }

    public function deactivation(){
        /*
$dismissed_pointers = explode( ',', get_user_meta( $user_id, 'dismissed_wp_pointers', true ) );

		// Check if our pointer is among dismissed ones and delete that mofo
		if ( in_array( 'gmb_welcome_pointer', $dismissed_pointers ) ) {
			$key = array_search( 'gmb_welcome_pointer', $dismissed_pointers );
			delete_user_meta( $user_id, 'dismissed_wp_pointers', $key['gmb_welcome_pointer'] );
		}
*/
    }
}