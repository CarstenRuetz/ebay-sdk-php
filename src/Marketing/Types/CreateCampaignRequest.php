<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Marketing\Types;

/**
 *
 * @property \DTS\eBaySDK\Marketing\Types\CampaignCriterion $campaignCriterion
 * @property string $campaignName
 * @property string $endDate
 * @property \DTS\eBaySDK\Marketing\Types\FundingStrategy $fundingStrategy
 * @property \DTS\eBaySDK\Marketing\Enums\MarketplaceIdEnum $marketplaceId
 * @property string $startDate
 */
class CreateCampaignRequest extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'campaignCriterion' => [
            'type'        => 'DTS\eBaySDK\Marketing\Types\CampaignCriterion',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'campaignCriterion',
        ],
        'campaignName'      => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'campaignName',
        ],
        'endDate'           => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'endDate',
        ],
        'fundingStrategy'   => [
            'type'        => 'DTS\eBaySDK\Marketing\Types\FundingStrategy',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'fundingStrategy',
        ],
        'marketplaceId'     => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'marketplaceId',
        ],
        'startDate'         => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'startDate',
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
