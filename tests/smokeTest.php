<?php

use PHPUnit\Framework\TestCase;
use WojciechMruk\Smoke\Smoke;

class ValidatorsTest extends TestCase
{

    function testDates()
    {
        $validator = new Smoke();
        $this->assertTrue($validator->pass('ok'));
        $this->assertFalse($validator->pass('not ok'));
    }
}