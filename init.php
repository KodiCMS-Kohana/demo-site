<?php defined( 'SYSPATH' ) or die( 'No direct script access.' );

 define('PLUGIN_DEMO_PATH', PLUGPATH . 'demo' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR);
 define('PLUGIN_DEMO_URL', PLUGINS_URL . 'demo/public/');

Plugin::factory('demo', array(
	'title' => __('Demo Site'),
	'version' => '1.0.0',
	'description' => 'DO NOT INSTALL TO PRODUCTION SERVER',
	'author' => 'ButscH',
	'required_cms_version' => '12.0.0'
))->register();

Observer::observe('admin_login_form', function() {
	echo View::factory('demo_login');
});