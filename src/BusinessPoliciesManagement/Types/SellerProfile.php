<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\BusinessPoliciesManagement\Types;

/**
 *
 * @property string $profileName
 * @property integer $profileId
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Enums\ProfileType $profileType
 * @property integer $profileVersion
 * @property string $profileDesc
 * @property \DateTime $deletedDate
 * @property integer $siteId
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Types\CategoryGroups $categoryGroups
 */
class SellerProfile extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'profileName'    => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'profileName',
        ],
        'profileId'      => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'profileId',
        ],
        'profileType'    => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'profileType',
        ],
        'profileVersion' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'profileVersion',
        ],
        'profileDesc'    => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'profileDesc',
        ],
        'deletedDate'    => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'deletedDate',
        ],
        'siteId'         => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'siteId',
        ],
        'categoryGroups' => [
            'type'        => 'DTS\eBaySDK\BusinessPoliciesManagement\Types\CategoryGroups',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'categoryGroups',
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/selling/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
