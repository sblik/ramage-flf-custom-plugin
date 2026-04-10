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
class ContactFormLongEntity extends SMPLFY_BaseEntity {
	public function __construct( $formEntry = array() ) {
		parent::__construct( $formEntry );
		$this->formId = FormIds::CONTACT_FORM_LONG;
	}

	protected function get_property_map(): array {
		return array(
			'nameFirst'                   => '10',
			'nameLast'                    => '20',
			'email'                       => '2',
			'phone'                       => '9',
			'zipCode'                     => '7',
			'typeOfMatter'                => '19',
			'howWouldPreferToBeContacted' => '21',
			'bestTimeToReturnCall'        => '22',
			'briefDescriptionOfIssue'     => '3',
			'utmSource'                   => '11',
			'utmMedium'                   => '18',
			'utmCampaign'                 => '17',
			'utmTerm'                     => '16',
			'utmContent'                  => '15',
			'gclid'                       => '14',
			'leadType'                    => '13',
			'sourceUrl'                   => '12',
			'msklid'                      => '23',
		);
	}
}