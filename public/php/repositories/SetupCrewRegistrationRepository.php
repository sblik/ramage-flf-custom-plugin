<?php
/**
 *  A repository acts as a way to run methods defined in the SMPLFY Core plugin in relation to a specific form on the site.
 *
 *  When creating a new form on the website, consider creating a Repository and Entity for it if you expect its entries to be accessed and/or manipulated
 *  from this custom plugin.
 */

namespace SMPLFY\boilerplate;

use SmplfyCore\SMPLFY_BaseRepository;
use SmplfyCore\SMPLFY_GravityFormsApiWrapper;
use WP_Error;
/**
 *
 * @method static SetupCrewRegistrationEntity|null get_one( $fieldId, $value )
 * @method static SetupCrewRegistrationEntity|null get_one_for_current_user()
 * @method static SetupCrewRegistrationEntity|null get_one_for_user( $userId )
 * @method static SetupCrewRegistrationEntity[] get_all( $fieldId = null, $value = null, string $direction = 'ASC' )
 * @method static int|WP_Error add( SetupCrewRegistrationEntity $entity )
 */
class SetupCrewRegistrationRepository extends SMPLFY_BaseRepository {
    public function __construct( SMPLFY_GravityFormsApiWrapper $gravityFormsApi ) {
        $this->entityType = SetupCrewRegistrationEntity::class;
        $this->formId     = FormIds::SETUP_CREW_REGISTRATION;

        parent::__construct( $gravityFormsApi );
    }
}