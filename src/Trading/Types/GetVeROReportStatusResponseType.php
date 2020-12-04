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
 * @property \DTS\eBaySDK\Trading\Types\PaginationResultType $PaginationResult
 * @property boolean $HasMoreItems
 * @property integer $ItemsPerPage
 * @property integer $PageNumber
 * @property integer $VeROReportPacketID
 * @property \DTS\eBaySDK\Trading\Enums\VeROReportPacketStatusCodeType $VeROReportPacketStatus
 * @property \DTS\eBaySDK\Trading\Types\VeROReportedItemDetailsType $ReportedItemDetails
 */
class GetVeROReportStatusResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'PaginationResult'       => [
            'type'        => 'DTS\eBaySDK\Trading\Types\PaginationResultType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PaginationResult',
        ],
        'HasMoreItems'           => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'HasMoreItems',
        ],
        'ItemsPerPage'           => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ItemsPerPage',
        ],
        'PageNumber'             => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PageNumber',
        ],
        'VeROReportPacketID'     => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'VeROReportPacketID',
        ],
        'VeROReportPacketStatus' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'VeROReportPacketStatus',
        ],
        'ReportedItemDetails'    => [
            'type'        => 'DTS\eBaySDK\Trading\Types\VeROReportedItemDetailsType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ReportedItemDetails',
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
