<?php

namespace Test\Rules;

use PHPUnit\Framework\TestCase;
use Validator\Facade\Validation;
use Validator\Rules;

class MaxTest extends TestCase
{
    public function testValidateMaxFalse()
    {
        $v = Validation::make(
            [
                'ma'=> 'mohammed',
            ], [
                'ma' => [Rules::MAX.'|6'],
            ]);
        $this->assertEquals(false, $v->isPassed());
        $this->assertEquals($v->getMessages()['ma'][0], 'the ma should shorter then 6');
    }

    public function testValidateNumberTrue()
    {
        $v = Validation::make(
            [
                'ma'=> 'mohammed',
            ], [
                'ma' => [Rules::MAX.'|20'],
            ]);
        $this->assertEquals(true, $v->isPassed());
    }
}
