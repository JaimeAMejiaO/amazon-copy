<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class PrimeroTest extends TestCase
{
    #[DataProvider('')]
    #[Test]
    public function test_example(): void
    {
        $num1 = 1;
        $num2 = 2;
        $this->assertSame(3,$num1 + $num2);
    }

    private static function dataProvider()
    {
        
    }
}
