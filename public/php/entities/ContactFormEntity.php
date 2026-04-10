<?php
/**
 * An entity represents a Gravity Form and combined with a corresponding Repository can allow for form entry manipulation to be simple and easy to
 * understand when looking at the code
 *
 * @property $nameFirst
 * @property $nameLast
 * @property $email
 */

namespace SMPLFY\ramageflf;

use SmplfyCore\SMPLFY_BaseEntity;

/**
 *
 * @property $nameFirst
 * @property $nameLast
 * @property $email
 * @property $phone
 * @property $zipCode
 * @property $typeOfMatter
 * @property $howWouldPreferToBeContacted
 * @property $bestTimeToReturnCall
 * @property $briefDescriptionOfIssue
 * @property $utmSource
 * @property $utmMedium
 * @property $utmCampaign
 * @property $utmTerm
 * @property $utmContent
 * @property $gclid
 * @property $leadType
 * @property $sourceUrl
 * @property $msklid
 */
class ContactFormEntity extends SMPLFY_BaseEntity {
	public function __construct( $formEntry = array() ) {
		parent::__construct( $formEntry );
		$this->formId = FormIds::CONTACT_FORM;
	}

	protected function get_property_map(): array {
		return array(
			'name'                            => '1',
			'email'                           => '4',
			'phone'                           => '11',
			'zipCode'                         => '5',
			'typeOfMatter'                    => '19',
			'howWouldPreferToBeContacted'     => '6',
			'bestTimeToReturnCall'            => '7',
			'briefDescriptionOfIssueDropDown' => '8',
			'briefDescriptionOfIssue'         => '12',
		);
	}
}