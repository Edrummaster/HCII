<?php

function compare($value){
	/*funcion que se ocupa de traducir la informacion a Hex
	unicamente si eñ valor excede a 9*/
	if ($value>9){
		switch ($value)
		{
			case 10:
				$value = "a";
				return $value;

			case 11:
				$value = "b";
				return $value;

			case 12: 
				$value = "c";
				return $value;

			case 13:
				$value = "d";
				return $value;

			case 14:
				$value = "e";
				return $value;

			case 15:
				$value = "f";
				return $value;
		}
	}
	else return $value;
}



function convertRGB_to_HEX($R, $G, $B){
	$RGB = array( 0 => $R, 1=> $G, 2=> $B );
	$converted= "";

	for ($i=0; $i < 3 ; $i++) {
		$div = (int)($RGB[$i]/16);
		$mult = 16*(int)$div;
		$rest = $RGB[$i]-(int)$mult;
		$converted = $converted.(string)(compare($div)).compare((string)($rest));
	}
	echo "RGB Color: ".'('.$R.','.$G.','.$B.')'."</br>";
	echo "Hex Color(converted): ".$converted;
}

convertRGB_to_HEX(112, 53, 53);

?>




