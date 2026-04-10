<?php

namespace SMPLFY\ramageflf;

class WordpressAdapter {
	private RamageFlfEndpoints $ramageFlfEndpoints;

	public function __construct( RamageFlfEndpoints $ramageFlfEndpoints ) {
		$this->ramageFlfEndpoints = $ramageFlfEndpoints;

		$this->register_hooks();
		$this->register_filters();
	}

	/**
	 * Register Wordpress hooks to handle custom logic
	 *
	 * @return void
	 */
	public function register_hooks(): void {
		add_action( 'rest_api_init', [ $this->ramageFlfEndpoints, 'ramage_custom_endpoints' ] );
	}

	/**
	 * Register Wordpress filters to handle custom logic
	 *
	 * @return void
	 */
	public function register_filters() {

	}
}