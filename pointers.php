<?php
$pointers = array();

// index.php pointers

$pointers['importer_1'] = array(
	'title'     => sprintf( '<h3>%s</h3>', esc_html__( 'Tip 1. One Click Demo Importer' ) ),
	'content'   => sprintf( '<p>%s</p>', esc_html__( 'Import Demo Data - smartest way to finish setup your theme.' ) ),
	'anchor_id' => '#toplevel_page_os-theme-import-data',
	'edge'      => 'left',
	'align'     => 'left',
	'where'     => array( 'toplevel_page_os-theme-import-data' )
);

$pointers['importer_2'] = array(
	'title'     => sprintf( '<h3>%s</h3>', esc_html__( 'Tip 2. Select Demo' ) ),
	'content'   => sprintf( '<p>%s</p>', esc_html__( 'You can choose one from available demo that you like and use it in one simple click. Features from different demos, can be combined!' ) ),
	'anchor_id' => '#os-importer-grid',
	'edge'      => 'bottom',
	'align'     => 'left',
	'where'     => array( 'toplevel_page_os-theme-import-data' )
);

$pointers['importer_3'] = array(
	'title'     => sprintf( '<h3>%s</h3>', esc_html__( 'Tip 3. Configure, what to import' ) ),
	'content'   => sprintf( '<p>%s</p>', esc_html__( 'Then, choose what Data you want to Import on your site..' ) ),
	'anchor_id' => '#os_importer_cfg_demo_1',
	'edge'      => 'left',
	'align'     => 'left',
	'where'     => array( 'toplevel_page_os-theme-import-data' )
);

$pointers['importer_4'] = array(
	'title'     => sprintf( '<h3>%s</h3>', esc_html__( 'Tip 4. Start Import' ) ),
	'content'   => sprintf( '<p>%s</p>', esc_html__( 'Start Import process and be patient. It\'s depends on the performance of your web server.' ) ),
	'anchor_id' => '#os_importer_actions_demo_1',
	'edge'      => 'left',
	'align'     => 'left',
	'where'     => array( 'toplevel_page_os-theme-import-data' )
);

$pointers['importer_5'] = array(
	'title'     => sprintf( '<h3>%s</h3>', esc_html__( 'Tip 5. Additional information' ) ),
	'content'   => sprintf( '<p>%s</p>', esc_html__( 'More info about Import Demo in One Click can be found in Help tab.. Enjoy it!' ) ),
	'anchor_id' => '#contextual-help-link-wrap',
	'edge'      => 'top',
	'align'     => 'right',
	'where'     => array( 'toplevel_page_os-theme-import-data' ),
	'scrollable'=> true
);

return $pointers;