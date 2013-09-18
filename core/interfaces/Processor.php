<?php defined('ABSPATH') or die;

/* This file is property of Pixel Grade Media. You may NOT copy, or redistribute
 * it. Please see the license that came with your copy for more information.
 */

/**
 * @package    pixcore
 * @category   core
 * @author     Pixel Grade Team
 * @copyright  (c) 2013, Pixel Grade Media
 */
interface PixcoreProcessor {

	/**
	 * @return static $this
	 */
	function run();

	/**
	 * @return array
	 */
	function status();

} # interface
