<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\ResolutionCaseManagement\Types;

/**
 *
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\ItemFilterType $itemFilter
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\DateRangeFilterType $creationDateRangeFilter
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\CaseTypeFilterType $caseTypeFilter
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\CaseStatusFilterType $caseStatusFilter
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\PaginationInput $paginationInput
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\CaseSortOrderType $sortOrder
 */
class GetUserCasesRequest extends \DTS\eBaySDK\ResolutionCaseManagement\Types\BaseRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'itemFilter'              => [
            'type'        => 'DTS\eBaySDK\ResolutionCaseManagement\Types\ItemFilterType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'itemFilter',
        ],
        'creationDateRangeFilter' => [
            'type'        => 'DTS\eBaySDK\ResolutionCaseManagement\Types\DateRangeFilterType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'creationDateRangeFilter',
        ],
        'caseTypeFilter'          => [
            'type'        => 'DTS\eBaySDK\ResolutionCaseManagement\Types\CaseTypeFilterType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'caseTypeFilter',
        ],
        'caseStatusFilter'        => [
            'type'        => 'DTS\eBaySDK\ResolutionCaseManagement\Types\CaseStatusFilterType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'caseStatusFilter',
        ],
        'paginationInput'         => [
            'type'        => 'DTS\eBaySDK\ResolutionCaseManagement\Types\PaginationInput',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'paginationInput',
        ],
        'sortOrder'               => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'sortOrder',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/resolution/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'getUserCasesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
