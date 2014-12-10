<?php

namespace Mhor\MediaInfo\Factory;

use Mhor\MediaInfo\Attribute\AbstractAttribute;

class GeneralAttributeFactory
{
    /**
     * @param $attribute
     * @param $value
     * @return \DateTime|AbstractAttribute
     */
    public static function create($attribute, $value)
    {
        return GenericAttributeFactory::create($attribute, $value);
    }
}
