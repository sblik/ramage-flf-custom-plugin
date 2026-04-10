<?php
/**
 * An entity represents a Gravity Form and combined with a corresponding Repository can allow for form entry manipulation to be simple and easy to
 * understand when looking at the code
 *
 * @property $nameFirst
 * @property $nameLast
 * @property $email
 */

namespace SMPLFY\boilerplate;

use SmplfyCore\SMPLFY_BaseEntity;

/**
 *
 * @property $nameFirst
 * @property $nameLast
 * @property $email
 * @property $phone
 * @property $street
 */
class SetupCrewRegistrationEntity2 extends SMPLFY_BaseEntity
{
    public function __construct($formEntry = array())
    {
        parent::__construct($formEntry);
        $this->formId = FormIds::SETUP_CREW_REGISTRATION;
    }

    protected function get_property_map(): array
    {
        return array(
            'nameFirst' => '1.3',
            'nameLast'  => '1.6',
            'email'     => '4',
            'phone'     => '3',
            'street'    => '5.2',
        );
    }
}