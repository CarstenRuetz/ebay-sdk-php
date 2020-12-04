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
 * @property string[] $CategoryID
 * @property \DateTime $LastUpdateTime
 * @property integer $MaxNames
 * @property integer $MaxValuesPerName
 * @property string $Name
 * @property \DTS\eBaySDK\Trading\Types\CategoryItemSpecificsType[] $CategorySpecific
 * @property boolean $ExcludeRelationships
 * @property boolean $IncludeConfidence
 * @property boolean $CategorySpecificsFileInfo
 */
class GetCategorySpecificsRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'CategoryID'                => [
            'type'        => 'string',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'CategoryID',
        ],
        'LastUpdateTime'            => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'LastUpdateTime',
        ],
        'MaxNames'                  => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'MaxNames',
        ],
        'MaxValuesPerName'          => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'MaxValuesPerName',
        ],
        'Name'                      => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Name',
        ],
        'CategorySpecific'          => [
            'type'        => 'DTS\eBaySDK\Trading\Types\CategoryItemSpecificsType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'CategorySpecific',
        ],
        'ExcludeRelationships'      => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ExcludeRelationships',
        ],
        'IncludeConfidence'         => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'IncludeConfidence',
        ],
        'CategorySpecificsFileInfo' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'CategorySpecificsFileInfo',
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetCategorySpecificsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
