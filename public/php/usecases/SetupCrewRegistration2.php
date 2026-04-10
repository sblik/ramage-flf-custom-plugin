<?php

namespace SMPLFY\boilerplate;

use SmplfyCore\SMPLFY_Log;

class SetupCrewRegistration2
{
    private SetupCrewRegistrationRepository2 $setupCrewRegistrationRepository2;

    public function __construct(SetupCrewRegistrationRepository2 $setupCrewRegistrationRepository2)
    {
        $this->setupCrewRegistrationRepository2 = $setupCrewRegistrationRepository2;
    }


    public function handle_setup_crew_registration($entry, $form)
    {

        $entity = new SetupCrewRegistrationEntity2($entry);

        SMPLFY_Log::info("Entity phone: ", $entity->phone);


    }


}