<?php

namespace Test\Rules;

use PHPUnit\Framework\TestCase;
use Validator\Facade\Validation;
use Validator\Rules;

class NumberTest extends TestCase
{
   
    public function testValidateNumberFalse()
    {
        $v = Validation::make(
            [
                'ma'=>'mohammed'
            ],[
                'ma' => [Rules::NUMBER],
            ]);
         $this->assertEquals(false,$v->isPassed());
         $this->assertEquals($v->getMessages()['ma'][0],'the ma should be a number'); 
    }

    public function testValidateNumberTrue()
    {
        $v = Validation::make(
            [
                'ma'=>15
            ],[
                'ma' => [Rules::NUMBER],
            ]);
         $this->assertEquals(true,$v->isPassed());
    }
    
}
