<?php

use PHPUnit\Framework\TestCase;
use Validator\Validate;
use Validator\Rules;

class ValidateTest extends TestCase
{
    public function testPushAndPop()
    {
        $v = true;
        $v->assertEquals(false,$v);
    }
}
