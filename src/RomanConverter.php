<?php 
namespace Romanos;

require_once 'RomanSymbol.php';

use Romanos\RomanSymbol;

class RomanConverter
{
    public function numberToRoman($number)
    {
      $digits = $this->decomposeNumberInReverse($number);
      $romanInReverse = array();
      foreach($digits as $position => $digit)
      {
        $romanInReverse [] = $this->transformDigitToRoman($digit, $position);
      }
    
        return $this->transformIntoRomanWord($romanInReverse);
		
    }

    public function transformDigitToRoman($digit, $position)
    {
       $romanSymbol = new RomanSymbol();
       $remaining = $digit % 5;
       $digitToRoman = ""; 
       if($remaining > 0 && $remaining <= 3) 
       {
         $digitToRoman = ($digit>5) ? $romanSymbol->getRomanSymbol(5*pow(10,$position)) :"";
         $digitToRoman .= $this->repeatLetters($romanSymbol->getRomanSymbol(pow(10,$position)),$remaining);
       }
       elseif ($remaining == 4 )
       {
          $higherNumber = ($digit <5)?5:10;  
          $digitToRoman = $romanSymbol->getRomanSymbol(pow(10,$position)) . $romanSymbol->getRomanSymbol($higherNumber*pow(10,$position));
       }
	   elseif($remaining == 0 && $digit == 5){
        $digitToRoman = $romanSymbol->getRomanSymbol(5*pow(10,$position));
       }

       return $digitToRoman;

    }
	
    public function decomposeNumberInReverse($number)
    {
      return array_reverse(str_split($number));
    }

    public function repeatLetters($letter, $times)
    {
		
      return str_repeat($letter, $times);
    }

    public function transformIntoRomanWord($romanInReverse)
    {
      return implode("",array_reverse($romanInReverse)); 
    }

}
?>
