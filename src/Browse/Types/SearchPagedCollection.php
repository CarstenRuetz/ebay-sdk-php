<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Browse\Types;

/**
 *
 * @property string $href
 * @property \DTS\eBaySDK\Browse\Types\ItemSummary[] $itemSummaries
 * @property integer $limit
 * @property string $next
 * @property integer $offset
 * @property string $prev
 * @property \DTS\eBaySDK\Browse\Types\Refinement $refinement
 * @property integer $total
 * @property \DTS\eBaySDK\Browse\Types\ErrorDetailV3[] $warnings
 */
class SearchPagedCollection extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'href'          => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'href',
        ],
        'itemSummaries' => [
            'type'        => 'DTS\eBaySDK\Browse\Types\ItemSummary',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'itemSummaries',
        ],
        'limit'         => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'limit',
        ],
        'next'          => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'next',
        ],
        'offset'        => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'offset',
        ],
        'prev'          => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'prev',
        ],
        'refinement'    => [
            'type'        => 'DTS\eBaySDK\Browse\Types\Refinement',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'refinement',
        ],
        'total'         => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'total',
        ],
        'warnings'      => [
            'type'        => 'DTS\eBaySDK\Browse\Types\ErrorDetailV3',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'warnings',
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
