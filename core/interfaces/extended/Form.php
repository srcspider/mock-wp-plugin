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
interface PixcoreForm extends PixcoreHTMLTag {

	/**
	 * @return static $this
	 */
	function addtemplatepath($path);

	/**
	 * @return string
	 */
	function field($fieldname);

	// Helpers
	// ------------------------------------------------------------------------

	/**
	 * @param string meta key
	 * @return boolean true if key exists, false otherwise
	 */
	function hasmeta($key);

	/**
	 * @return mixed value or default
	 */
	function getmeta($key, $default = null);

	/**
	 * @return static $this
	 */
	function setmeta($key, $value);

	/**
	 * If the key is currently a non-array value it will be converted to an
	 * array maintaning the previous value (along with the new one).
	 *
	 * @param  string name
	 * @param  mixed  value
	 * @return static $this
	 */
	function addmeta($name, $value);

	/**
	 * @return PixcoreMeta form meta
	 */
	function meta();

} # interface
