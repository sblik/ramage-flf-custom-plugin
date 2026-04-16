<?php
/**
 * Adapter for handling Gravity Forms events
 */

namespace SMPLFY\ramageflf;
class GravityFormsAdapter {
	private GoogleAnalytics $googleAnalytics;

	public function __construct( GoogleAnalytics $googleAnalytics ) {
		$this->googleAnalytics = $googleAnalytics;

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
		add_filter( 'gform_field_value_gclid', [ $this->googleAnalytics, 'populate_field_with_gclid' ] );
	}
}