<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Inventory\Types;

/**
 *
 * @property string $category
 * @property string $domain
 * @property integer $errorId
 * @property string[] $inputRefIds
 * @property string $longMessage
 * @property string $message
 * @property string[] $outputRefIds
 * @property \DTS\eBaySDK\Inventory\Types\ErrorParameterV3[] $parameters
 * @property string $subdomain
 */
class ErrorDetailV3 extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'category'     => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'category',
        ],
        'domain'       => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'domain',
        ],
        'errorId'      => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'errorId',
        ],
        'inputRefIds'  => [
            'type'        => 'string',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'inputRefIds',
        ],
        'longMessage'  => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'longMessage',
        ],
        'message'      => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'message',
        ],
        'outputRefIds' => [
            'type'        => 'string',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'outputRefIds',
        ],
        'parameters'   => [
            'type'        => 'DTS\eBaySDK\Inventory\Types\ErrorParameterV3',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'parameters',
        ],
        'subdomain'    => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'subdomain',
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
