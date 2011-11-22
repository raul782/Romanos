<?php
   require_once 'PHPUnit/Autoload.php';
   require_once 'PHPUnit/Framework/Assert/Functions.php';
   require_once '../src/RomanConverter.php';

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
				
			assertEquals($this->romanConverter->numberToRoman(1),"I");
       }


	public function testTransformNumberDos()
       {
			
			assertEquals($this->romanConverter->numberToRoman(2),"II");
       }

	public function testTransformNumberTres()
       {
			
			assertEquals($this->romanConverter->numberToRoman(3),"III");
       }

	public function testTransformNumberCuatro()
       {
			
			assertEquals($this->romanConverter->numberToRoman(4),"IV");
       }
	
	public function testTransformNumberCinco()
       {
			
			assertEquals($this->romanConverter->numberToRoman(5),"V");
       }
	public function testTransformNumberSeis()
       {
			
			assertEquals($this->romanConverter->numberToRoman(6),"VI");
       }
	public function testTransformNumberSiete()
       {
			
			assertEquals($this->romanConverter->numberToRoman(7),"VII");
       }
	public function testTransformNumberOcho()
       {
			
			assertEquals($this->romanConverter->numberToRoman(8),"VIII");
       }
    public function testTransformNumberTrece()
    {
        			assertEquals($this->romanConverter->numberToRoman(13),"XIII");
    }
    public function testTransformNumberCientoTrece()
    {
        			assertEquals($this->romanConverter->numberToRoman(113),"CXIII");
                    print $this->romanConverter->numberToRoman(113);
    }
    public function testTransformNumberMilDosCientosCuarentayNueve()    
    {
        			assertEquals($this->romanConverter->numberToRoman(1249),"MCCXLIX");
                    print $this->romanConverter->numberToRoman(1249);
    }
	public function testRepeatLettersZeroTimes()
	{

		assertEquals($this->romanConverter->repeatLetters("I",0),"");
	}
	
	public function testRepeatLettersManyTimes()
	{

		assertEquals($this->romanConverter->repeatLetters("I",3),"III");
	}

    public function testDecomposeNumberInReverse()
    {
        $digits = array(0,1);
        assertEquals($digits, $this->romanConverter->decomposeNumberInReverse(10));
        
    }
    
    public function testTransformIntoWord()
    {
        $romanInReverse = array("C", "X");
        assertEquals("XC", $this->romanConverter->transformIntoRomanWord($romanInReverse));
    }


}

?>
