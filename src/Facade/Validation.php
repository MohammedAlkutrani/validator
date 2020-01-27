<?php

namespace Validator\Facade;

use Validator\Parser;
use Validator\Validate;

class Validation
{
    public static function __callStatic($name, $arguments)
    {
        $v = new Validate(new Parser);

        return $v->{$name}(...$arguments);
    }
}
