<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Validator\Facade\Validation;
use Validator\Rules;

class ValidateTest extends TestCase
{
    public function testValidationTrue()
    {
         $v = Validation::make(['age'=>25],['age'=> [Rules::NUMBER]]);
         $this->assertEquals(true,$v->isPassed());
    }

    public function testValidationFalse()
    {
        $v = Validation::make(
            [
                'age'=>25,
                'ma'=>'mohammed'
            ],[
                'age'=> [Rules::NUMBER],
                'ma' => [Rules::NUMBER],
            ]);
         $this->assertEquals(false,$v->isPassed());
    }
    
}
