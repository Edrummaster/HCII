<?php

	// "Declarando Variables";
	//-----------------------;

	$entero = 10;
	$float = 12.5;
	$string = "clase HCI, Salvenme!";
	$array = array("hola","we", "me", "voy");
	$array2 = array("key1" => "hola", "key2" => "mundo" );
	$verdad = true;
	$falso= false;

	//

	class StrValTest
	{
		private $miVar = "clase1";
		public $miVar2= "clase2";
		public function __toString()
		{
			return __CLASS__;
		}

		public function example(){
			return "esto es una prueba";
		}
	}

	echo "PRACTICA PHP"."<br/>";

	echo "entero ".intval( $entero). "<br />" ;
	echo "float " .intval( $float). "<br />" ;
	echo "string ".intval( $string). "<br />" ;
	echo "boolean verdadero ".intval($verdad)."<br />";
	echo "boolean falso ".intval($falso). "<br />";

	echo "hex-dec: ".intval(0x165)."<br/ >";

	echo "float String: ". strval($float). "<br/ >";
	$floatString = strval($float);
	echo "floatString ".gettype($floatString). "<br/ >";
	echo " falso string: ".strval($falso). "<br/ >";
	echo "verdadero string: ". strval($verdad). "<br/ >";
	echo "class string ". strval(new StrValTest). "<br/ >";

	echo "array int: ". (int)$array. "<br/ >";
	echo "verdadero float: ".(float)$array. "<br/ >"; 
	var_dump(array)new StrValTest());
	echo "<br/ >";
	$ejemplo = (object)$float;
	var_dump($ejemplo); 


?>