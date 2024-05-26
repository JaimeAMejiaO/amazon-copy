<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class PrimeroTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $num1 = 1;
        $num2 = 2;
        $this->assertSame(3,$num1 + $num2);
    }
}
