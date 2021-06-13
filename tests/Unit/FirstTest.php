<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use Src\General;

class FirstTest extends TestCase
{
    private $Gen;

    protected function setUp():void
    {
        $this->Gen = new General();
    }

    public function testFirst():void
    {
        $this->assertSame(22,$this->Gen->firstFunc(1));
    }
}
