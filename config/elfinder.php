<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
	'volumes' => array(
		'demo_public' => array(
			'driver'			=> elFinder_Connector::FILE_SYSTEM,		// driver for accessing file system (REQUIRED)
			'path'				=> substr(PLUGIN_DEMO_PATH, 0, -1),	// path to files (REQUIRED)
			'URL'				=> PLUGIN_DEMO_URL,				// URL to files (REQUIRED),
			'alias'				=> __('Demo public'),
			'uploadMaxSize'		=> '10M',
			'mimeDetect'		=> 'internal',
			'imgLib'			=> 'gd',
		)
	)
);