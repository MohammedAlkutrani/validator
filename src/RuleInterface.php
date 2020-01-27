<?php

namespace Validator;

interface RuleInterface
{
    /**
     * Check if the value is passed.
     *
     * @param mix $value
     *
     * @return bool
     */
    public function isValid($value): bool;

    /**
     * Get error message.
     *
     * @param mix $attribute
     *
     * @return string
     */
    public function getMessage($attribute): string;
}
