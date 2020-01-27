<?php

namespace Test\Rules;

use PHPUnit\Framework\TestCase;
use Validator\Facade\Validation;
use Validator\Rules;

class BooleanTest extends TestCase
{
   
    public function testValidateBooleanFalse()
    {
        $v = Validation::make(
            [
                'ma'=>'mohammed'
            ],[
                'ma' => [Rules::BOOLEAN],
            ]);
         $this->assertEquals(false,$v->isPassed());
         $this->assertEquals($v->getMessages()['ma'][0],'the ma should be a boolean'); 
    }

    public function testValidateNumberTrue()
    {
        $v = Validation::make(
            [
                'ma'=>false
            ],[
                'ma' => [Rules::BOOLEAN],
            ]);
         $this->assertEquals(true,$v->isPassed());
    }
    
}
