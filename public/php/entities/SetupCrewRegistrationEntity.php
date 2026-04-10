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
 * @property $addressCity  
 * @property $addressCountry
 * @property $addressState 
 * @property $addressStreet
 * @property $addressZip
 */
class SetupCrewRegistrationEntity extends SMPLFY_BaseEntity
{
    public function __construct($formEntry = array())
    {
        parent::__construct($formEntry);
        $this->formId = FormIds::SETUP_CREW_REGISTRATION;
    }

    protected function get_property_map(): array
    {
        return array(
            'nameFirst'      => '1.3',
            'nameLast'       => '1.6',
            'email'          => '4',
            'phone'          => '3',
            'addressCity'    => '5.3',
            'addressCountry' => '5.6',
            'addressState'   => '5.4',
            'addressStreet'  => '5.1',
            'addressZip'     => '5.5',
        );
    }
}