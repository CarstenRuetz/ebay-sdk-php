<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\PostOrder\Types;

/**
 *
 * @property string $caseId
 * @property \DTS\eBaySDK\PostOrder\Types\ReturnEligibilityErrorDetailType[] $eligibilityErrorDetail
 * @property \DTS\eBaySDK\PostOrder\Types\StatusType $eligibilityStatus
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $eligibleStartDate
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $returnCreationDate
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $returnDeadline
 * @property string $returnId
 */
class EligibilityResultType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'caseId'                 => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'caseId',
        ],
        'eligibilityErrorDetail' => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\ReturnEligibilityErrorDetailType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'eligibilityErrorDetail',
        ],
        'eligibilityStatus'      => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\StatusType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'eligibilityStatus',
        ],
        'eligibleStartDate'      => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'eligibleStartDate',
        ],
        'returnCreationDate'     => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'returnCreationDate',
        ],
        'returnDeadline'         => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'returnDeadline',
        ],
        'returnId'               => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'returnId',
        ],
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
