<?php
//sentencia switch
$i = 3;

/*if ($i == 0){
	echo "i es igual a 0";
}
else if ($i == 1){
	echo "i es igual a 1";
}
else if ($i == 2){
	echo "i es igual a 2";
}*/

switch ($i) {
	case 0:
		echo "i es igual a 0";
		break;
	case 1:
		echo "i es igual a 1";
		break;
	case 2:
		echo "i es igual 2";
		break;
	
	default:
		echo "i no contiene ningun caso";
		break;
}

echo "<br>";

$cadena = "durazno";

switch ($cadena) {
	case 'manzana':
		echo "tu variable cadena es una manzana";
		break;
	case "durazno":
		echo "tu variable cadena es un durazno";
		break;
	
	default:
		echo " parece ser que tu variable es un tipo de fruta o lo que sea diferente";
		break;
}

?>