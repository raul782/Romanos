<?php 
namespace Romanos;

class RomanSymbol
{
	private $symbols =  array ( 
     1 => "I",
     5 => "V",
     10 => "X",
     50 => "L",
     100 => "C",
     500 => "D",
     1000 => "M"
    );


	public function getRomanSymbol($referenceNumber)
	{
        if(!in_array($referenceNumber, array_keys($this->symbols)) )
        {
            throw New Exception("Reference Number Invalid");
        }

       return  $this->symbols[$referenceNumber];
	}
	
}
?>