<?php
//arrays
//$array = array("manzana", "durazno", "pera");

$array = array(
	"numero1" => 10,
	"numero2" => 11,
	"numero3" => 22,
	"numero4" => 33,
	"numero5" => 44

);

for ($i=0; $i < count($array); $i++) 
{ 
	//echo $array[$i]."<br>";
}

foreach ($array as $key => $value) 
{
	echo "indice: ".$key." - ".$value."<br>";
}


?>