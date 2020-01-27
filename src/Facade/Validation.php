<?php

namespace Validator\Facade;

use Validator\Validate;

class Validation
{
    public static function __callStatic($name, $arguments)
    {
        $v = new Validate();

        return $v->{$name}(...$arguments);
    }
}
