<?php 
class RomanConverter
{
  public function numberToRoman($number)
 {

	if($number<=3){
		$romano = "";
		return $this->repeatLetters("I",$number);
		
	}
    if($number == 4){
      return "IV";
    }

	if($number == 5){
      return "V";
    }

	if( $number < 9 && $number >= 6){
		$romano = "V";
		$diff = $number - 5;
		$romano .= $this->repeatLetters("I", $diff);
		return $romano;
 	}
	
}
	


	public function repeatLetters($letter, $times)
	{
		
		return str_repeat($letter, $times);
	}

}
?>
