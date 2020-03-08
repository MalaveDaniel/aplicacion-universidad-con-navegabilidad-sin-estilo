<?php

$meses = array("enero", 
			"febrero", 
			"marzo", 
			"abril", 
			"mayo", 
			"junio", 
			"julio", 
			"agosto", 
			"septiembre", 
			"octubre", 
			"noviembre", 
			"diciembre");

/*for ($i=0; $i <count($meses) ; $i++) { 
	echo "los meses son: ". $meses[$i]. "<br>";
}*/

foreach ($meses as $key => $value) 
{
	echo "los meses son:  ".$value."<br>";
}


?>