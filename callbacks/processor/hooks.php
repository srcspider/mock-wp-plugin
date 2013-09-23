<?php

	function pixcore_callback_preupdate_example(array $input, PixcoreProcessor $processor) {
		// example code
		echo '[hook: '.__FUNCTION__.']';
	}

	function pixcore_callback_postupdate_example(array $input, PixcoreProcessor $processor) {
		// example code
		echo '[hook: '.__FUNCTION__.']';
	}
