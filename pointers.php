<?php
$pointers = array();
 
// index.php pointers
 
$pointers['pointer1'] = array(
	'title'     => sprintf( '<h3>%s</h3>', esc_html__( '1Add New Item' ) ),
	'content'   => sprintf( '<p>%s</p>', esc_html__( 'Easily add a new post..' ) ),
	'anchor_id' => '#wp-admin-bar-new-content',
	'edge'      => 'top',
	'align'     => 'left',
	'where'     => array( 'index.php' ) // <-- Please note this
);
 
$pointers['pointer2'] = array(
	'title'     => sprintf( '<h3>%s</h3>', esc_html__( '2Another info' ) ),
	'content'   => sprintf( '<p>%s</p>', esc_html__( 'Lore ipsum....' ) ),
	'anchor_id' => '#dashboard_primary',
	'edge'      => 'top',
	'align'     => 'right',
	'where'     => array( 'index.php' ) // <-- Please note this
);
 
$pointers['pointer3'] = array(
	'title'     => sprintf( '<h3>%s</h3>', esc_html__( '3Another info' ) ),
	'content'   => sprintf( '<p>%s</p>', esc_html__( 'Lore ipsum....' ) ),
	'anchor_id' => '#wp-admin-bar-new-content',
	'edge'      => 'top',
	'align'     => 'right',
	'where'     => array( 'index.php' ) // <-- Please note this
);
 
$pointers['pointer4'] = array(
	'title'     => sprintf( '<h3>%s</h3>', esc_html__( '4Another info' ) ),
	'content'   => sprintf( '<p>%s</p>', esc_html__( 'Lore ipsum....' ) ),
	'anchor_id' => '#dashboard_primary',
	'edge'      => 'top',
	'align'     => 'right',
	'where'     => array( 'index.php' ) // <-- Please note this
);
 
$pointers['pointer5'] = array(
	'title'     => sprintf( '<h3>%s</h3>', esc_html__( '5Another info' ) ),
	'content'   => sprintf( '<p>%s</p>', esc_html__( 'Lore ipsum....' ) ),
	'anchor_id' => '#comment-55',
	'edge'      => 'top',
	'align'     => 'right',
	'where'     => array( 'index.php' ) // <-- Please note this
);
 
 
 
// post-new.php pointers
 
$pointers['art_pointer1'] = array(
	'title'     => sprintf( '<h3>%s</h3>', esc_html__( '1Add New Item' ) ),
	'content'   => sprintf( '<p>%s</p>', esc_html__( 'Easily add a new post..' ) ),
	'anchor_id' => '#title',
	'edge'      => 'top',
	'align'     => 'left',
	'where'     => array( 'post-new.php', 'post.php' ) // <-- Please note this
);
 
$pointers['art_pointer2'] = array(
	'title'     => sprintf( '<h3>%s</h3>', esc_html__( '2Another info' ) ),
	'content'   => sprintf( '<p>%s</p>', esc_html__( 'Lore ipsum....' ) ),
	'anchor_id' => '#set-post-thumbnail',
	'edge'      => 'top',
	'align'     => 'right',
	'where'     => array( 'post-new.php', 'post.php' ) // <-- Please note this
);
 
$pointers['art_pointer3'] = array(
	'title'     => sprintf( '<h3>%s</h3>', esc_html__( '3Another info' ) ),
	'content'   => sprintf( '<p>%s</p>', esc_html__( 'Lore ipsum....' ) ),
	'anchor_id' => '#assistant_editor_box',
	'edge'      => 'top',
	'align'     => 'right',
	'where'     => array( 'post-new.php', 'post.php' ) // <-- Please note this
);
 
$pointers['art_pointer4'] = array(
	'title'     => sprintf( '<h3>%s</h3>', esc_html__( '4Another info' ) ),
	'content'   => sprintf( '<p>%s</p>', esc_html__( 'Lore ipsum....' ) ),
	'anchor_id' => '#postcustom',
	'edge'      => 'top',
	'align'     => 'right',
	'where'     => array( 'post-new.php', 'post.php' ) // <-- Please note this
);
 
$pointers['art_pointer5'] = array(
	'title'     => sprintf( '<h3>%s</h3>', esc_html__( '5Another info' ) ),
	'content'   => sprintf( '<p>%s</p>', esc_html__( 'Lore ipsum....' ) ),
	'anchor_id' => '#post-preview',
	'edge'      => 'top',
	'align'     => 'right',
	'where'     => array( 'post-new.php', 'post.php' ) // <-- Please note this
);
 
return $pointers;