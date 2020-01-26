<?php

namespace Validator\Rules;

use Validator\RuleInterface;

class Email implements RuleInterface
{
    /**
     * Check if the value is passed.
     *
     * @param mix $value
     * @return boolean
     */
    public function isValid($value) : bool
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
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
        return "the $attribute should be an email";
    }
}
