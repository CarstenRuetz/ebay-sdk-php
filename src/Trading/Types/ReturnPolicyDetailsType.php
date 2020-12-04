<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Types\RefundDetailsType[] $Refund
 * @property \DTS\eBaySDK\Trading\Types\ReturnsWithinDetailsType[] $ReturnsWithin
 * @property \DTS\eBaySDK\Trading\Types\ReturnsAcceptedDetailsType[] $ReturnsAccepted
 * @property boolean $Description
 * @property \DTS\eBaySDK\Trading\Types\WarrantyOfferedDetailsType[] $WarrantyOffered
 * @property \DTS\eBaySDK\Trading\Types\WarrantyTypeDetailsType[] $WarrantyType
 * @property \DTS\eBaySDK\Trading\Types\WarrantyDurationDetailsType[] $WarrantyDuration
 * @property boolean $EAN
 * @property \DTS\eBaySDK\Trading\Types\ShippingCostPaidByDetailsType[] $ShippingCostPaidBy
 * @property \DTS\eBaySDK\Trading\Types\RestockingFeeValueDetailsType[] $RestockingFeeValue
 * @property string $DetailVersion
 * @property \DateTime $UpdateTime
 */
class ReturnPolicyDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Refund'             => [
            'type'        => 'DTS\eBaySDK\Trading\Types\RefundDetailsType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'Refund',
        ],
        'ReturnsWithin'      => [
            'type'        => 'DTS\eBaySDK\Trading\Types\ReturnsWithinDetailsType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'ReturnsWithin',
        ],
        'ReturnsAccepted'    => [
            'type'        => 'DTS\eBaySDK\Trading\Types\ReturnsAcceptedDetailsType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'ReturnsAccepted',
        ],
        'Description'        => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Description',
        ],
        'WarrantyOffered'    => [
            'type'        => 'DTS\eBaySDK\Trading\Types\WarrantyOfferedDetailsType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'WarrantyOffered',
        ],
        'WarrantyType'       => [
            'type'        => 'DTS\eBaySDK\Trading\Types\WarrantyTypeDetailsType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'WarrantyType',
        ],
        'WarrantyDuration'   => [
            'type'        => 'DTS\eBaySDK\Trading\Types\WarrantyDurationDetailsType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'WarrantyDuration',
        ],
        'EAN'                => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'EAN',
        ],
        'ShippingCostPaidBy' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\ShippingCostPaidByDetailsType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'ShippingCostPaidBy',
        ],
        'RestockingFeeValue' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\RestockingFeeValueDetailsType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'RestockingFeeValue',
        ],
        'DetailVersion'      => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'DetailVersion',
        ],
        'UpdateTime'         => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'UpdateTime',
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
