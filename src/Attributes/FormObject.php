<?php

namespace Laragato\RequestObject\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class FormObject
{
    public function __construct(public string $class)
    {
        //
    }
}