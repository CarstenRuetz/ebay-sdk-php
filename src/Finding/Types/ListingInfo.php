<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Finding\Types;

/**
 *
 * @property boolean $bestOfferEnabled
 * @property boolean $buyItNowAvailable
 * @property \DTS\eBaySDK\Finding\Types\Amount $buyItNowPrice
 * @property \DTS\eBaySDK\Finding\Types\Amount $convertedBuyItNowPrice
 * @property \DateTime $startTime
 * @property \DateTime $endTime
 * @property string $listingType
 * @property boolean $gift
 */
class ListingInfo extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'bestOfferEnabled'       => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'bestOfferEnabled',
        ],
        'buyItNowAvailable'      => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'buyItNowAvailable',
        ],
        'buyItNowPrice'          => [
            'type'        => 'DTS\eBaySDK\Finding\Types\Amount',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'buyItNowPrice',
        ],
        'convertedBuyItNowPrice' => [
            'type'        => 'DTS\eBaySDK\Finding\Types\Amount',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'convertedBuyItNowPrice',
        ],
        'startTime'              => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'startTime',
        ],
        'endTime'                => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'endTime',
        ],
        'listingType'            => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'listingType',
        ],
        'gift'                   => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'gift',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/search/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
