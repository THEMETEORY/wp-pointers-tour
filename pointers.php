<?php
$pointers = array();

// index.php pointers

$pointers['importer_1'] = array(
	'title'     => sprintf( '<h3>%s</h3>', esc_html__( '1. Select Demo' ) ),
	'content'   => sprintf( '<p>%s</p>', esc_html__( 'Please, select the demo that you like..' ) ),
	'anchor_id' => '#os-importer-grid',
	'edge'      => '',
	'align'     => 'left',
	'where'     => array( 'toplevel_page_os-theme-import-data' )
);

$pointers['importer_2'] = array(
	'title'     => sprintf( '<h3>%s</h3>', esc_html__( '2. Configure, what to import' ) ),
	'content'   => sprintf( '<p>%s</p>', esc_html__( 'Then, choose what Data you want to Import on your site..' ) ),
	'anchor_id' => '#os_importer_cfg_demo_1',
	'edge'      => 'left',
	'align'     => 'left',
	'where'     => array( 'toplevel_page_os-theme-import-data' )
);

$pointers['importer_3'] = array(
	'title'     => sprintf( '<h3>%s</h3>', esc_html__( '3. Start Import' ) ),
	'content'   => sprintf( '<p>%s</p>', esc_html__( 'Start Import process and be patient. Import process can take a couple of minutes.' ) ),
	'anchor_id' => '#os_importer_actions_demo_1',
	'edge'      => 'left',
	'align'     => 'left',
	'where'     => array( 'toplevel_page_os-theme-import-data' )
);

$pointers['importer_4'] = array(
	'title'     => sprintf( '<h3>%s</h3>', esc_html__( 'Additional information' ) ),
	'content'   => sprintf( '<p>%s</p>', esc_html__( 'More info about Import Demo in One Click can be found in Help tab..' ) ),
	'anchor_id' => '#contextual-help-link-wrap',
	'edge'      => 'top',
	'align'     => 'right',
	'where'     => array( 'toplevel_page_os-theme-import-data' )
);

return $pointers;