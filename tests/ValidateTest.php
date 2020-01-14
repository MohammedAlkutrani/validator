<?php

use PHPUnit\Framework\TestCase;
use Validator\Validate;
use Validator\Role;

class ValidateTest extends TestCase
{
    public function testPushAndPop()
    {
        $v = new Validate([
                ['name'=>'mohammed'] => [Role::NUMBER],
                ['age' => 15] => [Role::NUMBER],
            ]);
    }
}