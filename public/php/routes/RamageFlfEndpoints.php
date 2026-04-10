<?php

namespace SMPLFY\ramageflf;

class RamageFlfEndpoints {
	private GoogleAnalytics $googleAnalytics;

	public function __construct( GoogleAnalytics $googleAnalytics ) {
		$this->googleAnalytics = $googleAnalytics;
	}

	/**
	 * @return void
	 */
	function ramage_custom_endpoints(): void {
		register_rest_route( 'rlf/v1', '/get_gclid',
			array(
				'methods'  => 'GET',
				'callback' => [ $this->googleAnalytics, 'get_gclid_for_pnc' ],
			)
		);
	}
}