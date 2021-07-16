<?php

namespace Phpunit\Test\Tests;

use PHPUnit\Framework\TestCase;
use function Phpunit\Test\Utils\reverseString;

class UtilsTest extends TestCase
{
    public function testReverse(): void
    {
        $this->assertEquals('', reverseString(''));
        $this->assertEquals('olleh', reverseString('hello'));
    }
}