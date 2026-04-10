<?php
/**
 * Adapter for handling Gravity Forms events
 */

namespace SMPLFY\ramageflf;
class GravityFormsAdapter {

	public function __construct() {


		$this->register_hooks();
		$this->register_filters();
	}

	/**
	 * Register gravity forms hooks to handle custom logic
	 *
	 * @return void
	 */
	public function register_hooks() {

	}

	/**
	 * Register gravity forms filters to handle custom logic
	 *
	 * @return void
	 */
	public function register_filters() {

	}
}