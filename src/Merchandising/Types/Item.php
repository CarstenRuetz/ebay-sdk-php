<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Merchandising\Types;

/**
 *
 * @property string $itemId
 * @property string $title
 * @property string $viewItemURL
 * @property \DTS\eBaySDK\Merchandising\Types\Amount $currentPrice
 * @property \DTS\eBaySDK\Merchandising\Types\Amount $originalPrice
 * @property string $globalId
 * @property string $timeLeft
 * @property string $primaryCategoryId
 * @property string $primaryCategoryName
 * @property string $subtitle
 * @property integer $bidCount
 * @property \DTS\eBaySDK\Merchandising\Types\Amount $buyItNowPrice
 * @property string $country
 * @property string $imageURL
 * @property \DTS\eBaySDK\Merchandising\Types\Amount $shippingCost
 * @property string $shippingType
 * @property integer $watchCount
 * @property \DTS\eBaySDK\Merchandising\Types\DiscountPriceInfo $discountPriceInfo
 */
class Item extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'itemId'              => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'itemId',
        ],
        'title'               => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'title',
        ],
        'viewItemURL'         => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'viewItemURL',
        ],
        'currentPrice'        => [
            'type'        => 'DTS\eBaySDK\Merchandising\Types\Amount',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'currentPrice',
        ],
        'originalPrice'       => [
            'type'        => 'DTS\eBaySDK\Merchandising\Types\Amount',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'originalPrice',
        ],
        'globalId'            => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'globalId',
        ],
        'timeLeft'            => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'timeLeft',
        ],
        'primaryCategoryId'   => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'primaryCategoryId',
        ],
        'primaryCategoryName' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'primaryCategoryName',
        ],
        'subtitle'            => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'subtitle',
        ],
        'bidCount'            => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'bidCount',
        ],
        'buyItNowPrice'       => [
            'type'        => 'DTS\eBaySDK\Merchandising\Types\Amount',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'buyItNowPrice',
        ],
        'country'             => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'country',
        ],
        'imageURL'            => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'imageURL',
        ],
        'shippingCost'        => [
            'type'        => 'DTS\eBaySDK\Merchandising\Types\Amount',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'shippingCost',
        ],
        'shippingType'        => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'shippingType',
        ],
        'watchCount'          => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'watchCount',
        ],
        'discountPriceInfo'   => [
            'type'        => 'DTS\eBaySDK\Merchandising\Types\DiscountPriceInfo',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'discountPriceInfo',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
