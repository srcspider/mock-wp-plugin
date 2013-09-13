<?php defined('ABSPATH') or die;

	/**
	 * Plugin Name: Mock WP Plugin
	 * Plugin URI: 127.0.0.1/wordpress/
	 * Description: Plugin for testing plugin related functionality.
	 * Version: 1.0.0
	 * Author: srcspider
	 * Author URI: http://github.com/srcspider/
	 * License: BSD-2
	 */

	// ensure EXT is defined
	if ( ! defined('EXT')) {
		define('EXT', '.php');
	}

	require 'core/bootstrap'.EXT;

	$config = include 'plugin-config'.EXT;

	// set textdomain
	mockprj::settextdomain($config['textdomain']);


	// Ensure Test Data
	// ----------------

	$defaults = include 'plugin-defaults'.EXT;

	$current_data = get_option($config['plugin-name']);

	if ($current_data === false) {
		add_option($config['plugin-name'], $defaults);
	}
	else if (count(array_diff_key($defaults, $current_data)) != 0) {
		$plugindata = array_merge($defaults, $current_data);
		update_option($config['plugin-name'], $plugindata);
	}
	# else: data is available; do nothing


	// Plugin Initialization
	// ---------------------

	function sampleplugin_callback_show_admin() {
		require 'views/admin'.EXT;
	}

	function sampleplugin_callback_register_menus() {
		add_submenu_page
			(
				'options-general.php',
				'Sample Plugin Options',
				'Sample Plugin',
				'manage_options',
				'sample-plugin-slug',
				'sampleplugin_callback_show_admin'
			);
	}

	add_action('admin_menu', 'sampleplugin_callback_register_menus');
