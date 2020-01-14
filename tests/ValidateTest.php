<?php

use PHPUnit\Framework\TestCase;
use Validator\Validate;
use Validator\Rules;

class ValidateTest extends TestCase
{
    public function testPushAndPop()
    {
        $v = new Validate([
                ['name'=>'mohammed'] => [Rules::NUMBER],
                ['age' => 15] => [Rules::NUMBER],
            ]);
    }
}