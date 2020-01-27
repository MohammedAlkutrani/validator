<?php

namespace Validator\Rules;

use Validator\RuleInterface;

class Min implements RuleInterface
{
    /**
     * @var int
     */
    private $minValue;

    /**
     * Passing the dynamic arrguments for the rule.
     *
     * @param int $maxValue
     *
     * @return void
     */
    public function __construct($minValue)
    {
        $this->minValue = $minValue;
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
        if (strlen($value) < $this->minValue) {
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
        return "the $attribute should be more then $this->minValue";
    }
}
