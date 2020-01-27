<?php

namespace Test\Rules;

use PHPUnit\Framework\TestCase;
use Validator\Facade\Validation;
use Validator\Rules;

class EmailTest extends TestCase
{
   
    public function testValidateEmailFalse()
    {
        $v = Validation::make(
            [
                'ma'=>'mohammed'
            ],[
                'ma' => [Rules::EMAIL],
            ]);
         $this->assertEquals(false,$v->isPassed());
         $this->assertEquals($v->getMessages()['ma'][0],'the ma should be an email'); 
    }

    public function testValidateEmailTrue()
    {
        $v = Validation::make(
            [
                'ma'=>'mohammed@gmail.com'
            ],[
                'ma' => [Rules::EMAIL],
            ]);
         $this->assertEquals(true,$v->isPassed());
    }
    
}
