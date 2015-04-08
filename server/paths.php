<?php

/**
 * Configure Application Paths
 *
 * @category	GPQuery
 * @package		GPQuery-Engine
 * @subpackage	Bootstrapper
 * @return		array
 */

return array(
	/**
	 * Application Path
	 *
	 * Path to Slim Eloquent application directory
	 */

	'app'	    =>	__DIR__ . './',

	/**
	 * Vendor/Lib Path
	 *
	 * Directory in which Composer dependencies are installed.
	 *
	 * @see		../composer.json
	 */

	'lib'		=>	__DIR__ . './vendor'

);