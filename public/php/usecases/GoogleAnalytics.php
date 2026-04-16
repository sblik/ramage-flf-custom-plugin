<?php
/**
 *  A usecase generally refers to a specific human action or the result of an action that happens on the site and contains
 * various functions that should happen as a result.
 *
 *  One or more of the functions are usually tied to a hook e.g. a Gravity Forms "after_submission" hook. See the Gravity Forms Adapter for how they are linked.
 */

namespace SMPLFY\ramageflf;

use SmplfyCore\SMPLFY_Log;
use SmplfyCore\WorkflowStep;
use WP_REST_Request;
use WP_REST_Response;

class GoogleAnalytics {
	private ContactFormLongRepository $contactFormLongRepository;

	public function __construct( ContactFormLongRepository $contactFormLongRepository ) {
		$this->contactFormLongRepository = $contactFormLongRepository;
	}

	/**
	 * @param $request
	 *
	 * @return WP_REST_Response
	 */
	function get_gclid_for_pnc( WP_REST_Request $request ): WP_REST_Response {
		SMPLFY_Log::info( "get_gclid_for_pnc triggered ------- ", $request );

		$requestJson = json_decode( $request->get_body() );
		SMPLFY_Log::info( "Request JSON: ", $requestJson );
		if ( isset( $requestJson->pnc_email ) ) {
			$pncEmail = $requestJson->pnc_email;

			$filters           = array( ContactFormLongEntity::get_field_id( 'email' ) => $pncEmail );
			$contactFormEntity = $this->contactFormLongRepository->get_one( $filters );//If the form submitted isn't the form for the entity

			if ( ! empty( $contactFormEntity ) ) {
				$gclid = $contactFormEntity->gclid;
				if ( empty( $gclid ) ) {
					$gclid = 0;
				}

				return new WP_REST_Response(
					[ 'message' => 'Request process successfully', 'gclid' => $gclid ],
					200
				);
			}

			return new WP_REST_Response(
				[ 'message' => 'Request failed, contact form does not exist' ],
				200
			);
		} else {
			return new WP_REST_Response(
				[ 'message' => 'Request failed, data missing' ],
				401
			);
		}
	}

// Populate GF hidden field via dynamic population parameter "gclid"
	function populate_field_with_gclid( $value ) {
		if ( ! empty( $_GET['gclid'] ) ) {
			return sanitize_text_field( $_GET['gclid'] );
		}

		if ( ! empty( $_COOKIE['gclid'] ) ) {
			return sanitize_text_field( $_COOKIE['gclid'] );
		}

		return $value;
	}

}