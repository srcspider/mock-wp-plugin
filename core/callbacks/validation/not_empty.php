<?php defined('ABSPATH') or die;

	function mockprj_validate_not_empty($fieldvalue, $processor) {
		return ! empty($fieldvalue);
	}
