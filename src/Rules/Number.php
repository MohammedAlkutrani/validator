<?php

namespace Validator\Rules;

use Validator\RuleInterface;

class Number implements RuleInterface
{
    /**
     * Check if the value is passed.
     *
     * @param mix $value
     * @return boolean
     */
    public function isValid($value) : bool
    {
        if (!is_int($value) && !is_float($value)) {
            return false;
        }

        return true;
    }

    /**
     * Get error message.
     *
     * @param mix $attribute
     * @return string
     */
    public function getMessage($attribute) : string
    {
        return "the $attribute should be a number";
    }
}
