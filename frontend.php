<?php defined( 'SYSPATH' ) or die( 'No direct script access.' );

Assets_Package::add('carousel')
	->css(NULL, PLUGINS_URL . 'demo/public/libs/Sequence/css/style.css', 'bootstrap')
	->js(NULL, PLUGINS_URL . 'demo/public/libs/Sequence/js/jquery.sequence-min.js', 'jquery');

Assets_Package::add('slider')
	->css(NULL, PLUGINS_URL . 'demo/public/libs/slick/slick.css', 'bootstrap')
	->js(NULL, PLUGINS_URL . 'demo/public/libs/slick/slick.min.js', 'jquery');

Assets_Package::add('holder')
	->js(NULL, PLUGINS_URL . 'demo/public/js/holder.js', 'jquery');

Assets_Package::add('isotope')
	->js(NULL, PLUGINS_URL . 'demo/public/js/jquery.isotope.js', 'jquery');

Assets_Package::add('rating')
	->js(NULL, PLUGINS_URL . 'demo/public/js/jquery.raty.js', 'jquery');

Assets_Package::add('fontawesome')
	->css(NULL, ADMIN_RESOURCES . 'libs/fontawesome/css/font-awesome.min.css', 'bootstrap');

Assets_Package::load('bootstrap')
	->css(NULL, ADMIN_RESOURCES . 'libs/bootstrap-3.3.1/dist/css/bootstrap.min.css')
	->css('bootstrap-theme',PLUGINS_URL . 'demo/public/css/bootstrap-theme.css');

Assets_Package::add('demo-assets')
	->js('global', PLUGINS_URL . 'demo/public/js/core.js', 'bootstrap')
	->css('core', PLUGINS_URL . 'demo/public/css/core.css', 'bootstrap')
	->css('animate', PLUGINS_URL . 'demo/public/css/animate.css', 'bootstrap');

