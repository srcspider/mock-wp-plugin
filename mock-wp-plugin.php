<?php defined('ABSPATH') or die;

	/**
	 * Plugin Name: Mock WP Plugin
	 * Plugin URI: 127.0.0.1/wordpress/
	 * Description: Plugin base for designed testing purposes.
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
