<?php

use PHPUnit\Framework\TestCase;
use Validator\Validate;
use Validator\Rules;
use Validator\ValidationException;

class ValidateTest extends TestCase
{
    public function testThrowException()
    {
<<<<<<< HEAD
        $v = new Validate(
                ['name'=>'mohammed','age' => 15] ,[ [Rules::NUMBER],
               [Rules::NUMBER],
            ]);
            var_dump($v);
            die();
        $this->expectException(ValidationException::class);
=======
        $v = true;
        $v->assertEquals(false,$v);
>>>>>>> 07752b0dfd4dc0824301cdae5ffb1d28c51a67c6
    }
}
