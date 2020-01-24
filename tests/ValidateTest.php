<?php

use PHPUnit\Framework\TestCase;
use Validator\Validate;
use Validator\Rules;
use Validator\ValidationException;

class ValidateTest extends TestCase
{
    public function testThrowException()
    {
        $v = new Validate(
                ['name'=>'mohammed','age' => 15] ,[ [Rules::NUMBER],
               [Rules::NUMBER],
            ]);
            var_dump($v);
            die();
        $this->expectException(ValidationException::class);
    }
}