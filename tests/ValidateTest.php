<?php

use PHPUnit\Framework\TestCase;
use Validator\Validate;
use Validator\Facade\Validation;
use Validator\Rules;
use Validator\ValidationException;

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

    public function testValidateNumber()
    {
        $v = Validation::make(
            [
                'age'=>25,
                'ma'=>'mohammed'
            ],[
                'age'=> [Rules::NUMBER],
                'ma' => [Rules::NUMBER],
            ]);
            // print_r($v->getMessages());
            // die();
         $this->assertEquals(false,$v->isPassed());
         $this->assertEquals($v->getMessages()['ma'][0],'the ma should be a number');
         
    }
    
}
