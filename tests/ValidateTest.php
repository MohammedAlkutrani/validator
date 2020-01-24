<?php

use PHPUnit\Framework\TestCase;
use Validator\Validate;
use Validator\Rules;
use Validator\ValidationException;

class ValidateTest extends TestCase
{
    public function testThrowException()
    {
        $v = true;
        $v->assertEquals(false,$v);
    }

    public function testActionTest()
    {
        $v = true;
        $v->assertEquals(false,$v);
    }
}
