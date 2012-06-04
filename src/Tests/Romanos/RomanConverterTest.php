<?php
namespace Tests\Romanos;
use Romanos\RomanConverter;

class RomanConverterTest extends \PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		$this->romanConverter = new RomanConverter();
	}

	public function tearDown()
	{
		$this->romanConverter = null;
	}

	public function testTransformNumberUno()
       {
				
			$this->assertEquals($this->romanConverter->numberToRoman(1),"I");
       }


	public function testTransformNumberDos()
       {
			
			$this->assertEquals($this->romanConverter->numberToRoman(2),"II");
       }

	public function testTransformNumberTres()
       {
			
			$this->assertEquals($this->romanConverter->numberToRoman(3),"III");
       }

	public function testTransformNumberCuatro()
       {
			
			$this->assertEquals($this->romanConverter->numberToRoman(4),"IV");
       }
	
	public function testTransformNumberCinco()
       {
			
			$this->assertEquals($this->romanConverter->numberToRoman(5),"V");
       }
	public function testTransformNumberSeis()
       {
			
			$this->assertEquals($this->romanConverter->numberToRoman(6),"VI");
       }
	public function testTransformNumberSiete()
       {
			
			$this->assertEquals($this->romanConverter->numberToRoman(7),"VII");
       }
	public function testTransformNumberOcho()
       {
			
			$this->assertEquals($this->romanConverter->numberToRoman(8),"VIII");
       }
    public function testTransformNumberTrece()
    {
        		$this->assertEquals($this->romanConverter->numberToRoman(13),"XIII");
    }
    public function testTransformNumberCientoTrece()
    {
        		$this->assertEquals($this->romanConverter->numberToRoman(113),"CXIII");
                    print $this->romanConverter->numberToRoman(113);
    }
    public function testTransformNumberMilDosCientosCuarentayNueve()    
    {
        		$this->assertEquals($this->romanConverter->numberToRoman(1249),"MCCXLIX");
                    print $this->romanConverter->numberToRoman(1249);
    }

    public function testRepeatLettersZeroTimes()
    {

	$this->assertEquals($this->romanConverter->repeatLetters("I",0),"");
    }
	
    public function testRepeatLettersManyTimes()
    {

	$this->assertEquals($this->romanConverter->repeatLetters("I",3),"III");
    }

    public function testDecomposeNumberInReverse()
    {
        $digits = array(0,1);
        $this->assertEquals($digits, $this->romanConverter->decomposeNumberInReverse(10));
        
    }
    
    public function testTransformIntoWord()
    {
        $romanInReverse = array("C", "X");
        $this->assertEquals("XC", $this->romanConverter->transformIntoRomanWord($romanInReverse));
    }


}

?>
