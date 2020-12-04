<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Shopping\Types;

/**
 *
 * @property \DTS\eBaySDK\Shopping\Types\ShippingDetailsType $ShippingDetails
 * @property \DTS\eBaySDK\Shopping\Types\ShippingCostSummaryType $ShippingCostSummary
 * @property \DTS\eBaySDK\Shopping\Types\PickUpInStoreDetailsType $PickUpInStoreDetails
 */
class GetShippingCostsResponseType extends \DTS\eBaySDK\Shopping\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ShippingDetails'      => [
            'type'        => 'DTS\eBaySDK\Shopping\Types\ShippingDetailsType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ShippingDetails',
        ],
        'ShippingCostSummary'  => [
            'type'        => 'DTS\eBaySDK\Shopping\Types\ShippingCostSummaryType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ShippingCostSummary',
        ],
        'PickUpInStoreDetails' => [
            'type'        => 'DTS\eBaySDK\Shopping\Types\PickUpInStoreDetailsType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PickUpInStoreDetails',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
