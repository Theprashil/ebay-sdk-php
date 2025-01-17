<?php

namespace DTS\eBaySDK\Trading\Types;

use DTS\eBaySDK\Types\BaseType;

/**
 * @property ConditionDescriptorType $ConditionDescriptor
 */

class ConditionDescriptorsType extends BaseType
{
    private static array $propertyTypes = [
        'ConditionDescriptor' => [
            'type' => ConditionDescriptorType::class,
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ConditionDescriptor'
        ]
    ];


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
