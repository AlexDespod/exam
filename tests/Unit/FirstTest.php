<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use Src\Fly;

class FirstTest extends TestCase
{
    private $Fly;

    protected function setUp():void
    {
        $this->Fly = new Fly();
    }

    public function testGetName():void
    {
        $name = $this->Fly->getNameById("E",1);
        $this->assertSame("Kolesnyk",$name);
    }



    /**
     * @dataProvider classesProvider
     */
    public function testCountOfPlaces(string $var,int $expected)
    {
        $count = $this->Fly->countOfTicketsByClass($var);
        $this->assertSame($expected,$count);
    }
    public function classesProvider()
    {
        return [
            ["E",3],
            ["B",2],
            ["S",4],
        ];
    }
}
