<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property \DTS\eBaySDK\MerchantData\Enums\PaymentTransactionStatusCodeType $PaymentStatus
 * @property \DTS\eBaySDK\MerchantData\Types\UserIdentityType $Payer
 * @property \DTS\eBaySDK\MerchantData\Types\UserIdentityType $Payee
 * @property \DateTime $PaymentTime
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $PaymentAmount
 * @property \DTS\eBaySDK\MerchantData\Types\TransactionReferenceType $ReferenceID
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $FeeOrCreditAmount
 * @property \DTS\eBaySDK\MerchantData\Types\TransactionReferenceType[] $PaymentReferenceID
 */
class PaymentTransactionType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'PaymentStatus'      => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PaymentStatus',
        ],
        'Payer'              => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\UserIdentityType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Payer',
        ],
        'Payee'              => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\UserIdentityType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Payee',
        ],
        'PaymentTime'        => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PaymentTime',
        ],
        'PaymentAmount'      => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PaymentAmount',
        ],
        'ReferenceID'        => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\TransactionReferenceType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ReferenceID',
        ],
        'FeeOrCreditAmount'  => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'FeeOrCreditAmount',
        ],
        'PaymentReferenceID' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\TransactionReferenceType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'PaymentReferenceID',
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
