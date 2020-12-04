<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Order\Types;

/**
 *
 * @property string $label
 * @property \DTS\eBaySDK\Order\Types\Image $logoImage
 * @property \DTS\eBaySDK\Order\Types\PaymentMethodBrand[] $paymentMethodBrands
 * @property \DTS\eBaySDK\Order\Types\PaymentMethodMessage[] $paymentMethodMessages
 * @property \DTS\eBaySDK\Order\Enums\PaymentMethodTypeEnum $paymentMethodType
 */
class PaymentMethod extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'label'                 => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'label',
        ],
        'logoImage'             => [
            'type'        => 'DTS\eBaySDK\Order\Types\Image',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'logoImage',
        ],
        'paymentMethodBrands'   => [
            'type'        => 'DTS\eBaySDK\Order\Types\PaymentMethodBrand',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'paymentMethodBrands',
        ],
        'paymentMethodMessages' => [
            'type'        => 'DTS\eBaySDK\Order\Types\PaymentMethodMessage',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'paymentMethodMessages',
        ],
        'paymentMethodType'     => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'paymentMethodType',
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
