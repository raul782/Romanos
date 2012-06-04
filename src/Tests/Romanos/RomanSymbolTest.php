<?php
namespace Tests\Romanos;

use Romanos\RomanSymbol;

class RomanSymbolTest extends \PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		$this->romanSymbol = new RomanSymbol();
	}

	public function tearDown()
	{
		$this->romanSymbol = null;
	}

    public function testGetRomanSymbolOne()
    {
        $this->assertEquals("I",$this->romanSymbol->getRomanSymbol(1));
    }
    public function testGetRomanSymbolTen()
    {   
        $this->assertEquals("X", $this->romanSymbol->getRomanSymbol(10));
    }
}
    
?>
