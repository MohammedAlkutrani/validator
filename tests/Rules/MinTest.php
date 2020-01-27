<?php

namespace Test\Rules;

use PHPUnit\Framework\TestCase;
use Validator\Facade\Validation;
use Validator\Rules;

class MinTest extends TestCase
{
    public function testValidateMinFalse()
    {
        $v = Validation::make(
            [
                'ma'=> 'mohammed',
            ], [
                'ma' => [Rules::MIN.'|20'],
            ]);
        $this->assertEquals(false, $v->isPassed());
        $this->assertEquals($v->getMessages()['ma'][0], 'the ma should be more then 20');
    }

    public function testValidateMinTrue()
    {
        $v = Validation::make(
            [
                'ma'=> 'mohammed',
            ], [
                'ma' => [Rules::MIN.'|6'],
            ]);
        $this->assertEquals(true, $v->isPassed());
    }
}
