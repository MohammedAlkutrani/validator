<?php

namespace Validator\Rules;

use Validator\RuleInterface;

class Max implements RuleInterface
{
    /**
     * @var int
     */
    private $maxValue;

    /**
     * Passing the dynamic arrguments for the rule.
     *
     * @param int $maxValue
     *
     * @return void
     */
    public function __construct($maxValue)
    {
        $this->maxValue = $maxValue;
    }

    /**
     * Check if the value is passed.
     *
     * @param mix $value
     *
     * @return bool
     */
    public function isValid($value): bool
    {
        if (strlen($value) > $this->maxValue) {
            return false;
        }

        return true;
    }

    /**
     * Get error message.
     *
     * @param mix $attribute
     *
     * @return string
     */
    public function getMessage($attribute): string
    {
        return "the $attribute should shorter then $this->maxValue";
    }
}
