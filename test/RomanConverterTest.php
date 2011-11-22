<?php
   require_once 'PHPUnit/Autoload.php';
   require_once 'PHPUnit/Framework/Assert/Functions.php';
   require_once '../src/RomanConverter.php';

class romanoTest extends \PHPUnit_Framework_TestCase
{

	public function testTransformNumberUno()
       {
	
			$RomanConverter = new RomanConverter();
			
			assertEquals($RomanConverter->numberToRoman(1),"I");
       }


	public function testTransformNumberDos()
       {
			
			$RomanConverter = new RomanConverter();
			
			assertEquals($RomanConverter->numberToRoman(2),"II");
       }

	public function testTransformNumberTres()
       {
			
			$RomanConverter = new RomanConverter();
			
			assertEquals($RomanConverter->numberToRoman(3),"III");
       }

	public function testTransformNumberCuatro()
       {
			
			$RomanConverter = new RomanConverter();
			
			assertEquals($RomanConverter->numberToRoman(4),"IV");
       }
	
	public function testTransformNumberCinco()
       {
			
			$RomanConverter = new RomanConverter();
			
			assertEquals($RomanConverter->numberToRoman(5),"V");
       }
	public function testTransformNumberSeis()
       {
			
			$RomanConverter = new RomanConverter();
			
			assertEquals($RomanConverter->numberToRoman(6),"VI");
       }
	public function testTransformNumberSiete()
       {
			
			$RomanConverter = new RomanConverter();
			
			assertEquals($RomanConverter->numberToRoman(7),"VII");
       }
	public function testTransformNumberOcho()
       {
			
			$RomanConverter = new RomanConverter();
			
			assertEquals($RomanConverter->numberToRoman(8),"VIII");
       }

	public function testRepeatLettersZeroTimes()
	{
		$RomanConverter = new RomanConverter();
		assertEquals($RomanConverter->repeatLetters("I",0),"");
	}
	
	public function testRepeatLettersManyTimes()
	{
		$RomanConverter = new RomanConverter();
		assertEquals($RomanConverter->repeatLetters("I",3),"III");
	}

}

?>
