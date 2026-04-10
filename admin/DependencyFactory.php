<?php
/**
 * A factory class responsible for creating and initializing all dependencies used in the plugin
 */

namespace SMPLFY\ramageflf;

use SmplfyCore\SMPLFY_GravityFormsApiWrapper;

class DependencyFactory {

	/**
	 * Create and initialize all dependencies
	 *
	 * @return void
	 */
	static function create_plugin_dependencies() {
		$gravityFormsWrapper = new SMPLFY_GravityFormsApiWrapper();

		// Repositories
		$contactFormLongRepository = new ContactFormLongRepository( $gravityFormsWrapper );
		//Usecases
		$googleAnalytics    = new GoogleAnalytics( $contactFormLongRepository );
		$ramageFlfEndpoints = new RamageFlfEndpoints( $googleAnalytics );


		new GravityFormsAdapter();
		new WordpressAdapter( $ramageFlfEndpoints );
	}
}