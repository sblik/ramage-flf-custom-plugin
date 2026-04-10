<?php

namespace SMPLFY\boilerplate;

class SetupCrewRegistration
{
    private ExampleRepository               $exampleRepository;
    private SetupCrewRegistrationRepository $setupCrewRegistrationRepository;

    public function __construct(ExampleRepository $exampleRepository, SetupCrewRegistrationRepository $setupCrewRegistrationRepository)
    {
        $this->exampleRepository               = $exampleRepository;
        $this->setupCrewRegistrationRepository = $setupCrewRegistrationRepository;
    }

    public function handle_setup_crew_registration($entry, $form)
    {
        $setupCrewRegistrationEntity = new SetupCrewRegistrationEntity($entry);

        $setupCrewRegistrationEntity = $this->setupCrewRegistrationRepository->get_one_for_current_user();

        $setupCrewRegistrationEntity->


        /*     $exampleEntity->phone = $setupCrewRegistrationEntity->phone;

             $this->exampleRepository->update($exampleEntity);*/

    }


}