<?php
 spl_autoload_register(null, false); 
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
		'romanos\\romanconverter' => '/Romanos/RomanConverter.php',
		'romanos\\romansymbol' => '/Romanos/RomanSymbol.php'
		);
	}
	$cn = strtolower($class);
	if(isset($classes[$cn]))
	{
		require __DIR__ .$classes[$cn];
	}
     }
);
