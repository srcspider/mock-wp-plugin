<?php defined('ABSPATH') or die;

	$basepath = dirname(__FILE__).DIRECTORY_SEPARATOR;

return array
	(
		'plugin-name' => 'mock-wp-plugin',

		'textdomain' => 'pixcore_txtd',

		'template-paths' => array
			(
				$basepath.'core/views/form-partials/',
				$basepath.'views/form-partials/',
			),

		'fields' => array
			(
				'article_settings_sample' => array
					(
						'type' => 'tabular-group',
						'label' => 'Default article settings',

						// Custom field settings
						// ---------------------

						'options' => array
							(
								'notify_blogs' => array
									(
										'label' => 'Attempt to notify any blogs linked to from the article',
										'default' => true,
										'type' => 'switch',
									),
								'allow_notifications' => array
									(
										'label' => 'Allow link notifications from other blogs (pingbacks and trackbacks)',
										'default' => true,
										'type' => 'switch',
									),
								'allow_comments' => array
									(
										'label' => 'Allow people to post comments on new articles',
										'default' => true,
										'type' => 'switch',
									),
							)
					),

				'other_comment_settings'
					=> include 'settings/other_comment_settings'.EXT,

			),

		// shows exception traces on error
		'debug' => false,

	); # config
