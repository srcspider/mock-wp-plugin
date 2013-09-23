<?php defined('ABSPATH') or die;

	$basepath = dirname(__FILE__).DIRECTORY_SEPARATOR;

return array
	(
		'plugin-name' => 'mock-wp-plugin',
		
		'settings-key' => 'mock-wp-plugin_settings',

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

		'processor' => array
			(
				// callback signature: (array $input, PixcoreProcessor $processor)

				'preupdate' => array
					(
						// callbacks to run before update process
						// cleanup and validation has been performed on data

						'preupdate_example',
					),
				'postupdate' => array
					(
						// callbacks to run post update

						'postupdate_example',
					),
			),

		'cleanup' => array
			(
				'switch' => array('switch_not_available'),
			),

		'checks' => array
			(
				'counter' => array('is_numeric', 'not_empty'),
			),

		'errors' => array
			(
				'not_empty' => 'Invalid Value.',
			),

		'callbacks' => array
			(
			// processor update hooks
				'preupdate_example' => 'pixcore_callback_preupdate_example',
				'postupdate_example' => 'pixcore_callback_postupdate_example',
			),

		// shows exception traces on error
		'debug' => isset($_GET['debug']) ? true : false,

	); # config
