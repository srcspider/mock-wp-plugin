<?php return array
	(
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
				'is_numeric' => __('Numberic value required.', mockprj::textdomain()),
				'not_empty' => __('Field is required.', mockprj::textdomain()),
			),

		'callbacks' => array
			(
			// cleanup callbacks
				'switch_not_available' => 'mockprj_cleanup_switch_not_available',

			// validation callbacks
				'is_numeric' => 'mockprj_validate_is_numeric',
				'not_empty' => 'mockprj_validate_not_empty'
			)

	); # config
